<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','zigcy_demo_config');

//function zigcy_demo_config(){

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/the-monday-pro-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'theme_settings' 	=> $git_url . 'default/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/the-monday-pro/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary Menu',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'accesspress-custom-post-type',
					'init'  	=> 'accesspress-custom-post-type/accesspress-cpt.php',
					'name'  	=> 'AccessPress Custom Post Type',
				), 
				array(
					'slug'  	=> 'newsletter',
					'init'  	=> 'newsletter/plugin.php',
					'name'  	=> 'Newsletter',
				), 
			),
			'premium' => array(
				array(
					'slug' 		=> 'revslider',
					'init'  	=> 'revslider/revslider.php',
					'name' 		=> 'Slider Revolution',
					'class'		=> 'RevSlider',
				)
			)
		)
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (<br/>".$_SERVER['HTTP_REFERER']."<br/>) and find config.json downloaded there.</h2>";
