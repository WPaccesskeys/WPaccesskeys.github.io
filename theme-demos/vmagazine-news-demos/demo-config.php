<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','vmagazine_lite_demo_config');

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/vmagazine-news-demos/';
$data = array(
	'news-demo' => array(
		'demo_name'			=> ('News Demo'),
		'xml_file'     		=> $git_url . 'news-demo/content.xml',
		'theme_settings' 	=> $git_url . 'news-demo/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'news-demo/widgets.wie',
		'screen'			=> $git_url . 'news-demo/screen.jpg',
		'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine-news/',
		'home_title'  		=> 'Home',
		'menus'				=> array(
								'primary_menu' 	=> 'Fashion Menu',
								'top_menu' 		=> 'primary menu',
								'footer_menu' 	=> 'Footer Menu',
								),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'siteorigin-panels',
					'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
					'name'  	=> 'SiteOrigin Page Builder',
				),
			),
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/8degree/config.json) and find config.json downloaded there.</h2>";