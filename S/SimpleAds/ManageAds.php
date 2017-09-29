<?php
/**********************************************************************************
* ManageAds.php                                                                   *
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
	void ManageAds()
		// !!!

	void list_ads()
		// !!!

	void edit_ads()
		// !!!

	void list_positions()
		// !!!

	void edit_position()
		// !!!
*/

function ManageAds()
{
	global $context, $sourcedir, $settings, $txt;

	require_once($sourcedir . '/Subs-AdsAdmin.php');

	loadTemplate('ManageAds', 'manageads');
	loadLanguage('ManageAds');

	$context['html_headers'] .= '
	<script type="text/javascript" src="' . $settings['default_theme_url'] . '/scripts/manageads.js?111"></script>';

	$sub_actions = array(
		'ads' => 'list_ads',
		'addad' => 'edit_ad',
		'editad' => 'edit_ad',
		'positions' => 'list_positions',
		'addposition' => 'edit_position',
		'editposition' => 'edit_position',
	);

	if (!isset($_REQUEST['sa']) || !isset($sub_actions[$_REQUEST['sa']]))
		$sub_action = 'ads';
	else
		$sub_action = $_REQUEST['sa'];

	$context[$context['admin_menu_name']]['tab_data'] = array(
		'title' => $txt['sa_admin_title'],
		'help' => '',
		'description' => $txt['sa_admin_desc'],
		'tabs' => array(
			'ads' => array(),
			'addad' => array(),
			'positions' => array(),
			'addposition' => array(),
		),
	);

	$sub_actions[$sub_action]();
}

function list_ads()
{
	global $smcFunc, $context, $scripturl, $sourcedir, $txt;

	if (!empty($_REQUEST['delete']))
	{
		checkSession('get');

		$smcFunc['db_query']('', '
			DELETE FROM {db_prefix}sa_ads
			WHERE id_ad = {int:id_ad}', 
			array(
				'id_ad' => (int) $_REQUEST['delete'],
			)
		);

		redirectexit('action=admin;area=ads;sa=ads');
	}

	if (!empty($_REQUEST['status']))
	{
		checkSession('request');

		$request = $smcFunc['db_query']('', '
			SELECT id_ad, status
			FROM {db_prefix}sa_ads
			WHERE id_ad = {int:id_ad}
			LIMIT 1',
			array(
				'id_ad' => (int) $_REQUEST['status'],
			)
		);
		list ($ad_id, $status) = $smcFunc['db_fetch_row']($request);
		$smcFunc['db_free_result']($request);

		if (!empty($ad_id))
		{
			$smcFunc['db_query']('', '
				UPDATE {db_prefix}sa_ads
				SET status = {int:status}
				WHERE id_ad = {int:id_ad}',
				array(
					'id_ad' => $ad_id,
					'status' => $status ? 0 : 1,
				)
			);
		}

		if (isset($_REQUEST['xml']))
		{
			$context['item_id'] = $ad_id;
			$context['status'] = $status ? 'disabled' : 'active';

			$context['template_layers'] = array();
			$context['sub_template'] = 'sa_change_status';

			obExit();
		}
		else
			redirectexit('action=admin;area=ads;sa=ads');
	}

	$list_options = array(
		'id' => 'list_ads',
		'title' => $txt['sa_ads_list_title'],
		'items_per_page' => 30,
		'base_href' => $scripturl . '?action=admin;area=ads;sa=ads',
		'default_sort_col' => 'name',
		'get_items' => array(
			'function' => 'get_ads_data',
		),
		'get_count' => array(
			'function' => 'get_ads_count',
		),
		'no_items_label' => $txt['sa_no_ads'],
		'columns' => array(
			'name' => array(
				'header' => array(
					'value' => $txt['sa_ads_name'],
				),
				'data' => array(
					'db' => 'name',
				),
				'sort' =>  array(
					'default' => 'name',
					'reverse' => 'name DESC',
				),
			),
			'clicks' => array(
				'header' => array(
					'value' => $txt['sa_ads_clicks'],
				),
				'data' => array(
					'db' => 'clicks',
					'style' => 'width: 10%; text-align: center;',
				),
				'sort' =>  array(
					'default' => 'clicks',
					'reverse' => 'clicks DESC',
				),
			),
			'impressions' => array(
				'header' => array(
					'value' => $txt['sa_ads_impressions'],
				),
				'data' => array(
					'db' => 'impressions',
					'style' => 'width: 10%; text-align: center;',
				),
				'sort' =>  array(
					'default' => 'impressions',
					'reverse' => 'impressions DESC',
				),
			),
			'expires' => array(
				'header' => array(
					'value' => $txt['sa_ads_expires'],
				),
				'data' => array(
					'db' => 'expires',
					'style' => 'width: 15%; text-align: center;',
				),
			),
			'status' => array(
				'header' => array(
					'value' => $txt['sa_ads_status'],
				),
				'data' => array(
					'db' => 'status',
					'style' => 'width: 10%; text-align: center;',
				),
				'sort' =>  array(
					'default' => 'expired',
					'reverse' => 'expired DESC',
				),
			),
			'actions' => array(
				'header' => array(
					'value' => $txt['sa_generic_actions'],
				),
				'data' => array(
					'function' => create_function('$row', '
						global $context, $scripturl;

						return \'<a href="\' . $scripturl . \'?action=admin;area=ads;sa=ads;status=\' . $row[\'id_ad\'] . \';\' . $context[\'session_var\'] . \'=\' . $context[\'session_id\'] . \'" onclick="sa_change_status(\' . $row[\'id_ad\'] . \', \\\'ad\\\', \\\'\' . $context[\'session_var\'] . \'\\\', \\\'\' . $context[\'session_id\'] . \'\\\'); return false;">\' . sa_embed_image($row[\'status_image\'], \'status_image_\' . $row[\'id_ad\']) . \'</a> <a href="\' . $scripturl . \'?action=admin;area=ads;sa=editad;ad=\' . $row[\'id_ad\'] . \'">\' . sa_embed_image(\'edit\') . \'</a> <a href="\' . $scripturl . \'?action=admin;area=ads;sa=ads;delete=\' . $row[\'id_ad\'] . \';\' . $context[\'session_var\'] . \'=\' . $context[\'session_id\'] . \'">\' . sa_embed_image(\'delete\') . \'</a>\';
					'),
					'style' => 'width: 20%; text-align: center;',
				),
			),
		),
	);

	require_once($sourcedir . '/Subs-List.php');

	createList($list_options);

	$context['page_title'] = $txt['sa_ads_list_title'];
	$context['sub_template'] = 'list_ads';
}

function edit_ad()
{
	global $smcFunc, $context, $txt;

	$ad_id = !empty($_REQUEST['ad']) ? (int) $_REQUEST['ad'] : 0;
	$context['is_new'] = empty($ad_id);

	if (!empty($_POST['submit']))
	{
		checkSession();

		$values = array();
		$fields = array(
			'name' => 'text',
			'body' => 'text',
			'positions' => 'array_int',
			'default_display' => 'text',
			'custom_display' => 'text',
			'allowed_groups' => 'text',
			'denied_groups' => 'text',
			'duration' => 'int',
			'max_clicks' => 'int',
			'max_impressions' => 'int',
			'status' => 'int',
		);

		foreach ($fields as $name => $type)
		{
			if ($type == 'text')
				$values[$name] = !empty($_POST[$name]) ? $smcFunc['htmlspecialchars']($_POST[$name], ENT_QUOTES) : '';
			elseif ($type == 'int')
				$values[$name] = !empty($_POST[$name]) ? (int) $_POST[$name] : 0;
			elseif ($type == 'array_int')
			{
				if (!empty($_POST[$name]) && is_array($_POST[$name]))
				{
					$temp = array();
					foreach ($_POST[$name] as $item)
						$temp[] = (int) $item;

					$values[$name] = implode(',', $temp);
				}
				else
					$values[$name] = '';

				$fields[$name] = 'text';
			}
		}

		$default_display = array();

		if (!empty($_POST['actions']) && is_array($_POST['actions']))
		{
			foreach ($_POST['actions'] as $action)
				$default_display[] = $smcFunc['htmlspecialchars']($action, ENT_QUOTES);
		}

		if (!empty($_POST['boards']) && is_array($_POST['boards']))
		{
			foreach ($_POST['boards'] as $board)
				$default_display[] = (int) $board;
		}

		if (!empty($default_display))
			$values['default_display'] = implode(',', $default_display);

		$allowed_groups = array();
		$denied_groups = array();

		if (!empty($_POST['membergroups']) && is_array($_POST['membergroups']))
		{
			foreach ($_POST['membergroups'] as $id => $value)
			{
				if ($value == 1)
					$allowed_groups[] = (int) $id;
				elseif ($value == -1)
					$denied_groups[] = (int) $id;
			}
		}

		if (!empty($allowed_groups))
			$values['allowed_groups'] = implode(',', $allowed_groups);
		if (!empty($denied_groups))
			$values['denied_groups'] = implode(',', $denied_groups);

		if (!empty($_POST['expiration']) && $_POST['expiration'] > 0 && !empty($_POST['expiration_type']))
		{
			if ($_POST['expiration_type'] == 3 && $_POST['expiration'] > 50)
				$_POST['expiration'] = 50;

			$values['duration'] = ((int) $_POST['expiration']) * 86400 * ($_POST['expiration_type'] == 3 ? 365 : ($_POST['expiration_type'] == 2 ? 30 : 1));
		}

		if ($smcFunc['htmltrim']($values['name']) === '')
			fatal_lang_error('sa_error_empty_name', false);

		if ($smcFunc['htmltrim']($values['body']) === '')
			fatal_lang_error('sa_error_empty_body', false);

		if ($context['is_new'])
		{
			$fields['created'] = 'int';
			$values['created'] = time();

			$smcFunc['db_insert']('',
				'{db_prefix}sa_ads',
				$fields,
				$values,
				array('id_ad')
			);
		}
		else
		{
			$current_data = get_ad_data($ad_id);
			$updated = array('duration', 'max_clicks', 'max_impressions');
			foreach ($updated as $field)
				$current_data[$field] = $values[$field];

			if ($current_data['expired'] && !is_ad_expired($current_data))
			{
				$fields['expired'] = 'int';
				$values['expired'] = 0;
			}

			$update_fields = array();
			foreach ($fields as $name => $type)
				$update_fields[] = $name . ' = {' . $type . ':' . $name . '}';

			$values['ad_id'] = $ad_id;

			$smcFunc['db_query']('','
				UPDATE {db_prefix}sa_ads
				SET ' . implode(', ', $update_fields) . '
				WHERE id_ad = {int:ad_id}',
				$values
			);
		}

		redirectexit('action=admin;area=ads;sa=ads');
	}

	if ($context['is_new'])
	{
		$context['ad'] = array(
			'id_ad' => 0,
			'name' => '',
			'body' => '',
			'positions' => array(),
			'default_display' => array(),
			'custom_display' => '',
			'allowed_groups' => array(),
			'denied_groups' => array(),
			'max_clicks' => 0,
			'max_impressions' => 0,
			'expiration' => array(0, 1),
			'status' => 1,
		);
	}
	else
		$context['ad'] = get_ad_data($ad_id);

	$context['positions'] = get_ads_positions();
	$context['membergroups'] = get_ads_membergroups();
	$context['actions'] = get_ads_actions();
	$context['boards'] = get_ads_boards();
	$context['body_template'] = get_ads_body_templates();

	$context['page_title'] = $context['is_new'] ? $txt['sa_ads_add_title'] : $txt['sa_ads_edit_title'];
	$context['sub_template'] = 'ads_edit';
}

function list_positions()
{
	global $smcFunc, $context, $scripturl, $sourcedir, $txt;

	if (!empty($_REQUEST['delete']))
	{
		checkSession('get');

		$smcFunc['db_query']('', '
			DELETE FROM {db_prefix}sa_positions
			WHERE id_position = {int:id_position}', 
			array(
				'id_position' => (int) $_REQUEST['delete'],
			)
		);

		redirectexit('action=admin;area=ads;sa=positions');
	}

	if (!empty($_REQUEST['status']))
	{
		checkSession('request');

		$request = $smcFunc['db_query']('', '
			SELECT id_position, status
			FROM {db_prefix}sa_positions
			WHERE id_position = {int:id_position}
			LIMIT 1',
			array(
				'id_position' => (int) $_REQUEST['status'],
			)
		);
		list ($position_id, $status) = $smcFunc['db_fetch_row']($request);
		$smcFunc['db_free_result']($request);

		if (!empty($position_id))
		{
			$smcFunc['db_query']('', '
				UPDATE {db_prefix}sa_positions
				SET status = {int:status}
				WHERE id_position = {int:id_position}',
				array(
					'id_position' => $position_id,
					'status' => $status ? 0 : 1,
				)
			);

			cache_put_data('sa_positions', null, 240);
		}

		if (isset($_REQUEST['xml']))
		{
			$context['item_id'] = $position_id;
			$context['status'] = $status ? 'disabled' : 'active';

			$context['template_layers'] = array();
			$context['sub_template'] = 'sa_change_status';

			obExit();
		}
		else
			redirectexit('action=admin;area=ads;sa=positions');
	}

	$list_options = array(
		'id' => 'list_positions',
		'title' => $txt['sa_positions_list_title'],
		'items_per_page' => 30,
		'base_href' => $scripturl . '?action=admin;area=ads;sa=positions',
		'default_sort_col' => 'name',
		'get_items' => array(
			'function' => 'get_positions_data',
		),
		'get_count' => array(
			'function' => 'get_positions_count',
		),
		'no_items_label' => $txt['sa_no_positions'],
		'columns' => array(
			'name' => array(
				'header' => array(
					'value' => $txt['sa_positions_name'],
				),
				'data' => array(
					'db' => 'name',
				),
				'sort' =>  array(
					'default' => 'name',
					'reverse' => 'name DESC',
				),
			),
			'namespace' => array(
				'header' => array(
					'value' => $txt['sa_positions_namespace'],
				),
				'data' => array(
					'db' => 'namespace',
				),
				'sort' =>  array(
					'default' => 'namespace',
					'reverse' => 'namespace DESC',
				),
			),
			'type' => array(
				'header' => array(
					'value' => $txt['sa_positions_type'],
				),
				'data' => array(
					'db' => 'type',
					'style' => 'width: 15%; text-align: center;',
				),
				'sort' =>  array(
					'default' => 'type',
					'reverse' => 'type DESC',
				),
			),
			'actions' => array(
				'header' => array(
					'value' => $txt['sa_generic_actions'],
				),
				'data' => array(
					'function' => create_function('$row', '
						global $context, $scripturl;

						return \'<a href="\' . $scripturl . \'?action=admin;area=ads;sa=positions;status=\' . $row[\'id_position\'] . \';\' . $context[\'session_var\'] . \'=\' . $context[\'session_id\'] . \'" onclick="sa_change_status(\' . $row[\'id_position\'] . \', \\\'position\\\', \\\'\' . $context[\'session_var\'] . \'\\\', \\\'\' . $context[\'session_id\'] . \'\\\'); return false;">\' . sa_embed_image($row[\'status_image\'], \'status_image_\' . $row[\'id_position\']) . \'</a> <a href="\' . $scripturl . \'?action=admin;area=ads;sa=editposition;position=\' . $row[\'id_position\'] . \'">\' . sa_embed_image(\'edit\') . \'</a> <a href="\' . $scripturl . \'?action=admin;area=ads;sa=positions;delete=\' . $row[\'id_position\'] . \';\' . $context[\'session_var\'] . \'=\' . $context[\'session_id\'] . \'">\' . sa_embed_image(\'delete\') . \'</a>\';
					'),
					'style' => 'width: 20%; text-align: center;',
				),
			),
		),
	);

	require_once($sourcedir . '/Subs-List.php');

	createList($list_options);

	$context['page_title'] = $txt['sa_positions_list_title'];
	$context['sub_template'] = 'list_positions';
}

function edit_position()
{
	global $smcFunc, $context, $txt;

	$position_id = !empty($_REQUEST['position']) ? (int) $_REQUEST['position'] : 0;
	$context['is_new'] = empty($position_id);

	if (!empty($_POST['submit']))
	{
		checkSession();

		$values = array();
		$fields = array(
			'name' => 'text',
			'namespace' => 'text',
			'type' => 'int',
			'status' => 'int',
		);

		foreach ($fields as $name => $type)
		{
			if ($type == 'text')
				$values[$name] = !empty($_POST[$name]) ? $smcFunc['htmlspecialchars']($_POST[$name], ENT_QUOTES) : '';
			elseif ($type == 'int')
				$values[$name] = !empty($_POST[$name]) ? (int) $_POST[$name] : 0;
		}

		if ($smcFunc['htmltrim']($values['name']) === '')
			fatal_lang_error('sa_error_empty_name', false);

		if ($smcFunc['htmltrim']($values['namespace']) === '')
			fatal_lang_error('sa_error_empty_namespace', false);
		elseif (preg_replace('~[A-Za-z0-9_]~', '', $values['namespace']) !== '')
			fatal_lang_error('sa_error_invalid_namespace', false);

		if ($context['is_new'])
		{
			$request = $smcFunc['db_query']('', '
				SELECT COUNT(*)
				FROM {db_prefix}sa_positions
				WHERE namespace = {string:namespace}
				LIMIT 1',
				array(
					'namespace' => $values['namespace'],
				)
			);
			list ($has_duplicate) = $smcFunc['db_fetch_row']($request);
			$smcFunc['db_free_result']($request);

			if ($has_duplicate)
				fatal_lang_error('sa_error_duplicate_namespace', false);

			$smcFunc['db_insert']('',
				'{db_prefix}sa_positions',
				$fields,
				$values,
				array('id_position')
			);

			$context['namespace'] = $values['namespace'];
			$context['page_title'] = $txt['sa_positions_notice_title'];
			$context['sub_template'] = 'positions_notice';

			cache_put_data('sa_positions', null, 240);

			return;
		}
		else
		{
			$update_fields = array();
			foreach ($fields as $name => $type)
				$update_fields[] = $name . ' = {' . $type . ':' . $name . '}';

			$values['position_id'] = $position_id;

			$smcFunc['db_query']('','
				UPDATE {db_prefix}sa_positions
				SET ' . implode(', ', $update_fields) . '
				WHERE id_position = {int:position_id}',
				$values
			);

			cache_put_data('sa_positions', null, 240);

			redirectexit('action=admin;area=ads;sa=positions');
		}
	}

	if ($context['is_new'])
	{
		$context['position'] = array(
			'id_position' => 0,
			'name' => '',
			'namespace' => '',
			'type' => 0,
			'status' => 1,
		);
	}
	else
		$context['position'] = get_position_data($position_id);

	$context['page_title'] = $context['is_new'] ? $txt['sa_positions_add_title'] : $txt['sa_positions_edit_title'];
	$context['sub_template'] = 'positions_edit';
}

?>