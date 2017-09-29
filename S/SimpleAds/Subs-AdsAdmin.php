<?php
/**********************************************************************************
* Subs-AdsAdmin.php                                                               *
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
	array get_ad_data()
		// !!!

	array get_ads_data()
		// !!!

	int get_ads_count()
		// !!!

	array get_ad_expiration()
		// !!!

	array get_position_data()
		// !!!

	array get_positions_data()
		// !!!

	int get_positions_count()
		// !!!

	array get_ads_membergroups()
		// !!!

	array get_ads_boards()
		// !!!

	array get_ads_actions()
		// !!!

	array get_ads_positions()
		// !!!

	array get_ads_body_templates()
		// !!!

	int sa_embed_image()
		// !!!
*/

function get_ad_data($id_ad)
{
	global $smcFunc;

	$request = $smcFunc['db_query']('', '
		SELECT
			id_ad, name, body, positions, default_display, custom_display,
			allowed_groups, denied_groups, created, duration, clicks, max_clicks,
			impressions, max_impressions, status, expired
		FROM {db_prefix}sa_ads
		WHERE id_ad = {int:id_ad}
		LIMIT {int:limit}',
		array(
			'id_ad' => $id_ad,
			'limit' => 1,
		)
	);
	$ad = array();
	while ($row = $smcFunc['db_fetch_assoc']($request))
	{
		$csv_fields = array('positions', 'default_display', 'allowed_groups', 'denied_groups');
		foreach ($csv_fields as $field)
			$row[$field] = !empty($row[$field]) ? explode(',', $row[$field]) : array();

		$row['created'] = timeformat($row['created'], '%d/%m/%y %H:%M');
		$row['expiration'] = get_ad_expiration($row['duration']);

		$ad = $row;
	}
	$smcFunc['db_free_result']($request);

	return $ad;
}

function get_ads_data($start, $items_per_page, $sort)
{
	global $smcFunc, $txt;

	$request = $smcFunc['db_query']('', '
		SELECT
			id_ad, name, clicks, impressions,
			created, duration, status, expired
		FROM {db_prefix}sa_ads
		ORDER BY {raw:sort}
		LIMIT {int:start}, {int:per_page}',
		array(
			'sort' => $sort,
			'start' => $start,
			'per_page' => $items_per_page,
		)
	);
	$ads = array();
	while ($row = $smcFunc['db_fetch_assoc']($request))
	{
		if (empty($row['duration']))
			$row['expires'] = $txt['sa_generic_never'];
		else
			$row['expires'] = timeformat($row['created'] + $row['duration'], '%d/%m/%y');

		$row['status_image'] = $row['status'] ? 'active' : 'disabled';
		$row['status'] = $row['expired'] ? $txt['sa_generic_expired'] : ($row['status'] ? $txt['sa_generic_active'] : $txt['sa_generic_disabled']);

		$ads[] = $row;
	}
	$smcFunc['db_free_result']($request);

	return $ads;
}

function get_ads_count()
{
	global $smcFunc;

	$request = $smcFunc['db_query']('', '
		SELECT COUNT(*)
		FROM {db_prefix}sa_ads',
		array(
		)
	);
	list ($total_ads) = $smcFunc['db_fetch_row']($request);
	$smcFunc['db_free_result']($request);

	return $total_ads;
}

function get_ad_expiration($duration)
{
	$types = array(
		3 => 86400 * 365,
		2 => 86400 * 30,
		1 => 86400,
	);

	$expiration = array(0, 1);
	foreach ($types as $type => $time)
	{
		if ($duration >= $time)
		{
			$expiration = array($duration / $time, $type);
			break;
		}
	}

	return $expiration;
}

function get_position_data($id_position)
{
	global $smcFunc;

	$request = $smcFunc['db_query']('', '
		SELECT id_position, name, namespace, type, status
		FROM {db_prefix}sa_positions
		WHERE id_position = {int:id_position}
		LIMIT {int:limit}',
		array(
			'id_position' => $id_position,
			'limit' => 1,
		)
	);
	$position = array();
	while ($row = $smcFunc['db_fetch_assoc']($request))
		$position = $row;
	$smcFunc['db_free_result']($request);

	return $position;
}

function get_positions_data($start, $items_per_page, $sort)
{
	global $smcFunc, $txt;

	$request = $smcFunc['db_query']('', '
		SELECT id_position, name, namespace, type, status
		FROM {db_prefix}sa_positions
		ORDER BY {raw:sort}
		LIMIT {int:start}, {int:per_page}',
		array(
			'sort' => $sort,
			'start' => $start,
			'per_page' => $items_per_page,
		)
	);
	$positions = array();
	while ($row = $smcFunc['db_fetch_assoc']($request))
	{
		$row['type'] = $row['type'] ? $txt['sa_generic_rotating'] : $txt['sa_generic_plain'];
		$row['status_image'] = $row['status'] ? 'active' : 'disabled';

		$positions[] = $row;
	}
	$smcFunc['db_free_result']($request);

	return $positions;
}

function get_positions_count()
{
	global $smcFunc;

	$request = $smcFunc['db_query']('', '
		SELECT COUNT(*)
		FROM {db_prefix}sa_positions',
		array(
		)
	);
	list ($total_positions) = $smcFunc['db_fetch_row']($request);
	$smcFunc['db_free_result']($request);

	return $total_positions;
}

function get_ads_membergroups()
{
	global $smcFunc, $txt;

	loadLanguage('ManageBoards');

	$groups = array(
		-1 => $txt['parent_guests_only'],
		0 => $txt['parent_members_only'],
	);

	$request = $smcFunc['db_query']('', '
		SELECT group_name, id_group, min_posts
		FROM {db_prefix}membergroups
		WHERE id_group != {int:moderator_group}
		ORDER BY min_posts, group_name',
		array(
			'moderator_group' => 3,
		)
	);
	while ($row = $smcFunc['db_fetch_assoc']($request))
		$groups[(int) $row['id_group']] = trim($row['group_name']);
	$smcFunc['db_free_result']($request);

	return $groups;
}

function get_ads_boards()
{
	global $smcFunc;

	$request = $smcFunc['db_query']('order_by_board_order', '
		SELECT b.id_board, b.name AS board_name, c.name AS cat_name
		FROM {db_prefix}boards AS b
			LEFT JOIN {db_prefix}categories AS c ON (c.id_cat = b.id_cat)
		WHERE redirect = {string:empty_string}',
		array(
			'empty_string' => '',
		)
	);
	$boards = array();
	while ($row = $smcFunc['db_fetch_assoc']($request))
		$boards[$row['id_board']] = $row['cat_name'] . ' - ' . $row['board_name'];
	$smcFunc['db_free_result']($request);

	return $boards;
}

function get_ads_actions()
{
	global $txt;

	$actions = array(
		'board_index' => $txt['sa_generic_board_index'],
		'recent' => $txt['recent_posts'],
		'unread' => $txt['unread_topics_visit'],
		'unreadreplies' => $txt['unread_replies'],
		'profile' => $txt['profile'],
		'pm' => $txt['pm_short'],
		'calendar' => $txt['calendar'],
		'admin' =>  $txt['admin'],
		'login' =>  $txt['login'],
		'register' =>  $txt['register'],
		'post' =>  $txt['post'],
		'stats' =>  $txt['forum_stats'],
		'search' =>  $txt['search'],
		'mlist' =>  $txt['members_list'],
		'moderate' =>  $txt['moderate'],
		'help' =>  $txt['help'],
		'who' =>  $txt['who_title'],
	);

	return $actions;
}

function get_ads_positions()
{
	global $smcFunc;

	$request = $smcFunc['db_query']('', '
		SELECT id_position, name
		FROM {db_prefix}sa_positions
		ORDER BY id_position',
		array(
		)
	);
	$positions = array();
	while ($row = $smcFunc['db_fetch_assoc']($request))
		$positions[$row['id_position']] = $row['name'];
	$smcFunc['db_free_result']($request);

	return $positions;
}

function get_ads_body_templates()
{
	$templates = array(
		array('windowbg', 'no_title'),
		array('windowbg', 'catbg'),
		array('windowbg', 'titlebg'),
		array('roundframe', 'no_title'),
		array('roundframe', 'catbg'),
		array('roundframe', 'titlebg'),
		array('information', 'no_title'),
		array('information', 'catbg'),
		array('information', 'titlebg'),
	);

	$windowbg = '<div class="windowbg">
	<span class="topslice"><span></span></span>
	<div class="content">
		{Content}
	</div>
	<span class="botslice"><span></span></span>
</div>';

	$information = '<div class="information">
	{Content}
</div>';

	$roundframe = '<span class="upperframe"><span></span></span>
<div class="roundframe">
	{Content}
</div>
<span class="lowerframe"><span></span></span>';

	$no_title = '';

	$catbg = '<div class="cat_bar">
	<h3 class="catbg">{Title}</h3>
</div>
';

	$titlebg = '<div class="cat_bar">
	<h3 class="titlebg">{Title}</h3>
</div>
';

	$body_templates = array();
	foreach ($templates as $data)
		$body_templates[implode(' + ', $data)] = htmlspecialchars($$data[1] . $$data[0]);

	return $body_templates;
}

function sa_embed_image($name, $id = false)
{
	global $modSettings, $settings, $txt;

	if (!isset($settings['sa_images_url']))
	{
		if (file_exists($settings['theme_dir'] . '/images/sa'))
			$settings['sa_images_url'] =  $settings['theme_url'] . '/images/sa';
		else
			$settings['sa_images_url'] =  $settings['default_theme_url'] . '/images/sa';
	}

	$alt = isset($txt['sa_generic_' . $name]) ? $txt['sa_generic_' . $name] : '';
	$image = '<img src="' . $settings['sa_images_url'] . '/' . $name . '.png" alt="' . $alt . '" title="' . $alt . '"' . ($id ? ' id="' . $id . '"' : '') . ' />';

	return $image;
}

?>