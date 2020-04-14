<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/edict-lite-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url . 'default/redux_options.json',
			'option_name' 	=> 'edict_lite_options',
		),
		'theme_settings'  	=> $git_url . 'default/customizer_options.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/edict-lite/',
		'is_shop'			=> false,
		'home_title'  		=> 'Home',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug' => 'redux-framework',
					'init' => 'redux-framework/redux-framework.php',
					'name' => 'Redux Framework Plugin'
				)
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
		array(
			'screen'			=> $git_url . 'edict/upgrade.jpeg',
			'preview_url'		=> 'https://8degreethemes.com/demo/edict/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/edict/',
			'demo_name'			=> 'Edict',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";