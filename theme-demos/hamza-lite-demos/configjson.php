<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/hamza-lite-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings'  	=> $git_url . 'default/customizer_options.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://8degreethemes.com/demo/hamza-lite/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'main menu',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug' 		=> 'accesspress-social-counter',
					'init' 	=> 'accesspress-social-counter/accesspress-social-counter.php',
					'name' 	=> 'AccessPress Social Counter'
				),
				array(
					'slug' 		=> 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7'
				),
				'newsletter' => array(
					'slug' 		=> 'newsletter',
					'init' 	=> 'newsletter/plugin.php',
					'name' 	=> 'Newsletter'
				),
				array(
					'slug' 		=> 'accesspress-twitter-feed',
					'init' 	=> 'accesspress-twitter-feed/accesspress-twitter-feed.php',
					'name' 	=> 'WP TFeed'
				)
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(

		array(
			'screen'			=> $git_url . 'hamza-pro/upgrade.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/hamza-pro/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/hamza-pro/',
			'demo_name'			=> 'Hamza Pro',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";