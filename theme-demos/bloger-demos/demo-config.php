<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','zigcy_demo_config');

//function zigcy_demo_config(){

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/bloger-demos/';
$data = array(
	'bloger' => array(
		'demo_name' => 'bloger',
		'xml_file'     		=> $git_url . 'bloger/bloger.xml',
		'widgets_file'  	=> $git_url . 'bloger/bloger.wie',
		'theme_settings' 	=> $git_url . 'bloger/bloger.dat',
		'screen'			=> $git_url . 'bloger/bloger.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bloger',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
			),
			'premium' => array()
		)
	)
);
//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/themes/test/bloger-demos/config.json) and find config.json downloaded there.</h2>";




