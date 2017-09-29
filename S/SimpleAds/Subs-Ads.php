<?php
/**********************************************************************************
* Subs-Ads.php                                                                    *
***********************************************************************************
* SimpleAds                                                                       *
* Another great SMF Modification project by [SiNaN] (sinan@simplemachines.org)    *
* =============================================================================== *
* Software Version:           SimpleAds 1.0.1                                     *
* Software by:                [SiNaN] (sinan@simplemachines.org)                  *
* Copyright 2008-2009 by:     [SiNaN] (sinan@simplemachines.org)                  *
* Support, News, Updates at:  http://www.simplemachines.org                       *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Simple Machines LLC.          *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* See the "license.txt" file for details of the Simple Machines license.          *
* The latest version can always be found at http://www.simplemachines.org.        *
**********************************************************************************/

if (!defined('SMF'))
	die('Hacking attempt...');

/*
	void load_ads()
		// !!!

	void update_ad_clicks()
		// !!!

	void update_ad_impressions()
		// !!!

	bool is_ad_expired()
		// !!!

	bool is_ad_allowed()
		// !!!

	bool is_ad_displayed()
		// !!!
*/

function load_ads()
{
	global $smcFunc, $context, $settings;

	$context['ads'] = array();
	$context['displayed_ads'] = array();

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'update_ad_clicks')
		update_ad_clicks();

	$ignore_actions = array('dlattach', 'jsoption', '.xml', 'xmlhttp', 'verificationcode', 'findmember', 'helpadmin', 'printpage', 'quotefast','spellcheck');
	if (isset($_REQUEST['xml']) || isset($_REQUEST['debug']) || (!empty($_REQUEST['sa']) && !empty($_REQUEST['package']) && $_REQUEST['sa'] == 'uninstall2' && strpos($_REQUEST['package'], 'SimpleAds') !== false) || (!empty($_REQUEST['action']) && in_array($_REQUEST['action'], $ignore_actions)))
		return;

	loadTemplate('Ads');

	if (($positions = cache_get_data('sa_positions', 240)) === null)
	{
		$request = $smcFunc['db_query']('', '
			SELECT id_position, namespace, type
			FROM {db_prefix}sa_positions
			WHERE status = {int:active}',
			array(
				'active' => 1,
			)
		);
		$positions = array();
		while ($row = $smcFunc['db_fetch_assoc']($request))
			$positions[$row['id_position']] = $row;
		$smcFunc['db_free_result']($request);

		cache_put_data('sa_positions', $positions, 240);
	}

	if (empty($positions))
		return;

	$request = $smcFunc['db_query']('', '
		SELECT
			id_ad, body, positions, default_display, custom_display, allowed_groups,
			denied_groups, created, duration, clicks, max_clicks, impressions, max_impressions
		FROM {db_prefix}sa_ads
		WHERE status = {int:active}
			AND expired = {int:not_expired}',
		array(
			'active' => 1,
			'not_expired' => 0,
		)
	);
	while ($row = $smcFunc['db_fetch_assoc']($request))
	{
		if (is_ad_expired($row))
			continue;

		if (!is_ad_allowed($row['allowed_groups'], $row['denied_groups']))
			continue;

		if (!is_ad_displayed($row['default_display'], $row['custom_display']))
			continue;

		$row['positions'] = !empty($row['positions']) ? explode(',', $row['positions']) : array();
		foreach ($row['positions'] as $position)
		{
			if (!isset($positions[$position]))
				continue;

			if (!isset($context['ads'][$positions[$position]['namespace']]))
			{
				$context['ads'][$positions[$position]['namespace']] = array(
					'type' => $positions[$position]['type'],
					'ads' => array(),
				);
			}

			$body = preg_replace('~<a([^>]+)>~', '<a$1 onclick="update_ad_clicks(' . $row['id_ad'] . ');">', un_htmlspecialchars($row['body']));
			$context['ads'][$positions[$position]['namespace']]['ads'][$row['id_ad']] = $body;
		}
	}
	$smcFunc['db_free_result']($request);

	if (empty($context['ads']))
		return;

	$context['html_headers'] .= '
	<script type="text/javascript" src="' . $settings['default_theme_url'] . '/scripts/ads.js?111"></script>';

	$temp_layers = $context['template_layers'];
	$context['template_layers'] = array();
	foreach ($temp_layers as $layer)
	{
		$context['template_layers'][] = $layer;

		if ($layer == 'html')
			$context['template_layers'][] = 'ads_outer';
		elseif ($layer == 'body')
			$context['template_layers'][] = 'ads_inner';
	}
}

function update_ad_clicks()
{
	global $smcFunc;

	$id_ad = !empty($_REQUEST['ad']) ? (int) $_REQUEST['ad'] : 0;
	if (empty($id_ad))
		return;

	$smcFunc['db_query']('', '
		UPDATE {db_prefix}sa_ads
		SET clicks = clicks + 1
		WHERE id_ad = {int:id_ad}',
		array(
			'id_ad' => $id_ad,
		)
	);

	obExit(false);
}

function update_ad_impressions()
{
	global $smcFunc, $context;

	if (empty($context['displayed_ads']))
		return;

	$smcFunc['db_query']('', '
		UPDATE {db_prefix}sa_ads
		SET impressions = impressions + 1
		WHERE id_ad IN ({array_int:displayed_ads})',
		array(
			'displayed_ads' => $context['displayed_ads'],
		)
	);
}

function is_ad_expired($data)
{
	global $smcFunc;

	$expired = false;

	if (!empty($data['duration']) && $data['created'] + $data['duration'] < time())
		$expired = true;
	elseif (!empty($data['max_impressions']) && $data['impressions'] >= $data['max_impressions'])
		$expired = true;
	elseif (!empty($data['max_clicks']) && $data['clicks'] >= $data['max_clicks'])
		$expired = true;

	if ($expired)
	{
		$smcFunc['db_query']('', '
			UPDATE {db_prefix}sa_ads
			SET expired = {int:expired}
			WHERE id_ad = {int:id_ad}',
			array(
				'id_ad' => $data['id_ad'],
				'expired' => 1,
			)
		);
	}

	return $expired;
}

function is_ad_allowed($allowed, $denied)
{
	global $user_info;
	static $group_cache;

	$cache_key = $allowed . $denied;

	if (!isset($group_cache[$cache_key]))
	{
		$allowed = !empty($allowed) ? explode(',', $allowed) : array();
		$denied = !empty($denied) ? explode(',', $denied) : array();

		$is_allowed = false;
		if (count(array_intersect($user_info['groups'], $denied)) > 0)
			$is_allowed = false;
		elseif (count(array_intersect($user_info['groups'], $allowed)) > 0)
			$is_allowed = true;

		$group_cache[$cache_key] = $is_allowed;
	}

	return $group_cache[$cache_key];
}

function is_ad_displayed($default, $custom)
{
	global $context;
	static $display_cache, $action, $board;

	$cache_key = $default . $custom;

	$display = false;

	if (!isset($action) || !isset($board))
	{
		$action = !empty($context['current_action']) ? $context['current_action'] : '';
		$board = !empty($context['current_board']) ? $context['current_board'] : 0;

		if (empty($exceptions))
		{
			$exceptions = array(
				'post' => array('announce', 'editpoll', 'emailuser', 'post2', 'sendtopic'),
				'register' => array('activate', 'coppa'),
				'board_index' => array('collapse'),
				'admin' => array('credits', 'theme', 'viewquery', 'viewsmfile'),
				'moderate' => array('groups'),
				'login' => array('reminder'),
				'profile' => array('trackip', 'viewprofile'),
			);
		}

		foreach ($exceptions as $key => $exception)
		{
			if (in_array($action, $exception))
			{
				$action = $key;
				break;
			}
		}
	}

	if (!isset($display_cache[$cache_key]))
	{
		if (!empty($default) && empty($custom))
		{
			$default = !empty($default) ? explode(',', $default) : array();

			if (!empty($action) && in_array($action, $default))
				$display = true;
			elseif (!empty($board) && in_array($board, $default))
				$display = true;
			elseif (in_array('board_index', $default) && empty($action) && empty($board) && count($_GET) < 1)
				$display = true;

		}
		elseif (!empty($custom))
		{
			if ($custom === 'all')
				$display = true;
			else
			{
				$variables = array(
					'{action}' => "'$action'",
					'{board}' => $board,
				);

				$custom = un_htmlspecialchars(str_replace(array_keys($variables), array_values($variables), $custom));

				$display = @eval('return (' . $custom . ') ? true : false;');
			}
		}

		$display_cache[$cache_key] = $display;
	}

	return $display_cache[$cache_key];
}

?>