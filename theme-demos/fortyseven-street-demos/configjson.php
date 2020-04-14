<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/fortyseven-street-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings'  	=> $git_url . 'default/customizer_options.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/fortyseven-street/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'blog_title'  		=> 'Blogs',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'      => 'easy-pricing-tables',
					'init' 	=> 'easy-pricing-tables/pricing-table-plugin.php',
					'name' 	=> 'Easy Pricing Tables',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				)
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(

		array(
			'screen'			=> $git_url . '47street/upgrade.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/47street/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/47street/',
			'demo_name'			=> '47 Street Pro',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";