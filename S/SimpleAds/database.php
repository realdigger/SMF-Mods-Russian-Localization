<?php

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

global $smcFunc, $sourcedir, $modSettings;

if (!array_key_exists('db_add_column', $smcFunc))
	db_extend('packages');

$tables = array(
	'sa_ads' => array(
		'columns' => array(
			array(
				'name' => 'id_ad',
				'type' => 'mediumint',
				'size' => 8,
				'auto' => true,
			),
			array(
				'name' => 'name',
				'type' => 'varchar',
				'size' => 255,
				'default' => '',
			),
			array(
				'name' => 'body',
				'type' => 'text',
			),
			array(
				'name' => 'positions',
				'type' => 'varchar',
				'size' => 255,
				'default' => '',
			),
			array(
				'name' => 'default_display',
				'type' => 'text',
			),
			array(
				'name' => 'custom_display',
				'type' => 'text',
			),
			array(
				'name' => 'allowed_groups',
				'type' => 'text',
			),
			array(
				'name' => 'denied_groups',
				'type' => 'text',
			),
			array(
				'name' => 'created',
				'type' => 'int',
				'size' => 10,
				'default' => 0,
			),
			array(
				'name' => 'duration',
				'type' => 'int',
				'size' => 10,
				'default' => 0,
			),
			array(
				'name' => 'clicks',
				'type' => 'int',
				'size' => 10,
				'default' => 0,
			),
			array(
				'name' => 'max_clicks',
				'type' => 'int',
				'size' => 10,
				'default' => 0,
			),
			array(
				'name' => 'impressions',
				'type' => 'int',
				'size' => 10,
				'default' => 0,
			),
			array(
				'name' => 'max_impressions',
				'type' => 'int',
				'size' => 10,
				'default' => 0,
			),
			array(
				'name' => 'status',
				'type' => 'tinyint',
				'size' => 4,
				'default' => 0,
			),
			array(
				'name' => 'expired',
				'type' => 'tinyint',
				'size' => 4,
				'default' => 0,
			),
		),
		'indexes' => array(
			array(
				'type' => 'primary',
				'columns' => array('id_ad'),
			),
		),
	),
	'sa_positions' => array(
		'columns' => array(
			array(
				'name' => 'id_position',
				'type' => 'mediumint',
				'size' => 8,
				'auto' => true,
			),
			array(
				'name' => 'name',
				'type' => 'varchar',
				'size' => 255,
				'default' => '',
			),
			array(
				'name' => 'namespace',
				'type' => 'varchar',
				'size' => 255,
				'default' => '',
			),
			array(
				'name' => 'type',
				'type' => 'tinyint',
				'size' => 4,
				'default' => 0,
			),
			array(
				'name' => 'status',
				'type' => 'tinyint',
				'size' => 4,
				'default' => 1,
			),
		),
		'indexes' => array(
			array(
				'type' => 'primary',
				'columns' => array('id_position'),
			),
		),
	),
);

foreach ($tables as $table => $data)
	$smcFunc['db_create_table']('{db_prefix}' . $table, $data['columns'], $data['indexes']);

$default_positions = array(
	array(
		'name' => 'Overall Header',
		'namespace' => 'overall_header',
	),
	array(
		'name' => 'Overall Footer',
		'namespace' => 'overall_footer',
	),
	array(
		'name' => 'Below Menu',
		'namespace' => 'below_menu',
	),
	array(
		'name' => 'Above Info Center',
		'namespace' => 'above_info_center',
	),
	array(
		'name' => 'Above Footer',
		'namespace' => 'above_footer',
	),
	array(
		'name' => 'Left Side',
		'namespace' => 'left_side',
	),
	array(
		'name' => 'Right Side',
		'namespace' => 'right_side',
	),
	array(
		'name' => 'After First Post',
		'namespace' => 'after_first_post',
	),
	array(
		'name' => 'Inside First Post',
		'namespace' => 'inside_first_post',
	),
	array(
		'name' => 'After Last Post',
		'namespace' => 'after_last_post',
	),
);

require_once($sourcedir . '/Subs-AdsAdmin.php');

$total_positions = get_positions_count();

if (empty($total_positions))
{
	$smcFunc['db_insert']('',
		'{db_prefix}sa_positions',
		array(
			'name' => 'text',
			'namespace' => 'text',
		),
		$default_positions,
		array('id_position')
	);
}

$defaults = array(
);

$updates = array(
	'sa_version' => '1.0.1',
);

foreach ($defaults as $index => $value)
{
	if (!isset($modSettings[$index]))
		$updates[$index] = $value;
}

updateSettings($updates);

if (SMF == 'SSI')
	echo 'Database adaptation successful!';

?>