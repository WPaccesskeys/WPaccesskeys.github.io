<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/the100-demos/';
$data = array(
	'classic' => array(
		'demo_name' => 'Classic Demo',
		'xml_file'     		=> $git_url . 'classic/content.xml',
		'widgets_file'  	=> $git_url . 'classic/widgets.wie',
		'theme_settings'  	=> $git_url . 'classic/customizer_options.dat',
		'screen'			=> $git_url . 'classic/classic.jpg',
		'preview_url'		=> 'https://8degreethemes.com/demo/the100/classic/',
		'is_shop'			=> true,
		'home_title'  		=> 'Homepage',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'menu-1' => 'Primary Menu',
		),
	),
	'construction' => array(
		'demo_name' => 'Construction Demo',
		'xml_file'     		=> $git_url . 'construction/content.xml',
		'widgets_file'  	=> $git_url . 'construction/widgets.wie',
		'theme_settings'  	=> $git_url . 'construction/customizer_options.dat',
		'screen'			=> $git_url . 'construction/construction.jpg',
		'preview_url'		=> 'https://8degreethemes.com/demo/the100/construction/',
		'is_shop'			=> true,
		'home_title'  		=> 'Homepage',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'menu-1' => 'Primary Menu',
		),
	),
	'restaurant' => array(
		'demo_name' => 'Restaurant Demo',
		'xml_file'     		=> $git_url . 'restaurant/content.xml',
		'widgets_file'  	=> $git_url . 'restaurant/widgets.wie',
		'theme_settings'  	=> $git_url . 'restaurant/customizer_options.dat',
		'screen'			=> $git_url . 'restaurant/restaurant.jpg',
		'preview_url'		=> 'https://8degreethemes.com/demo/the100/restaurant/',
		'is_shop'			=> true,
		'home_title'  		=> 'Homepage',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'menu-1' => 'Primary Menu',
		),
	),
	'events' => array(
		'demo_name' => 'Events Demo',
		'xml_file'     		=> $git_url . 'events/content.xml',
		'widgets_file'  	=> $git_url . 'events/widgets.wie',
		'theme_settings'  	=> $git_url . 'events/customizer_options.dat',
		'screen'			=> $git_url . 'events/events.jpg',
		'preview_url'		=> 'https://8degreethemes.com/demo/the100/events/',
		'is_shop'			=> true,
		'home_title'  		=> 'Homepage',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'menu-1' => 'Primary Menu',
		),
	),
	'charity' => array(
		'demo_name' => 'Charity Demo',
		'xml_file'     		=> $git_url . 'charity/content.xml',
		'widgets_file'  	=> $git_url . 'charity/widgets.wie',
		'theme_settings'  	=> $git_url . 'charity/customizer_options.dat',
		'screen'			=> $git_url . 'charity/charity.jpg',
		'preview_url'		=> 'https://8degreethemes.com/demo/the100/charity/',
		'is_shop'			=> true,
		'home_title'  		=> 'Homepage',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'menu-1' => 'Primary Menu',
		),
	),
	'agency' => array(
		'demo_name' => 'Agency Demo',
		'xml_file'     		=> $git_url . 'agency/content.xml',
		'widgets_file'  	=> $git_url . 'agency/widgets.wie',
		'theme_settings'  	=> $git_url . 'agency/customizer_options.dat',
		'screen'			=> $git_url . 'agency/agency.jpg',
		'preview_url'		=> 'https://8degreethemes.com/demo/the100/agency/',
		'is_shop'			=> true,
		'home_title'  		=> 'Homepage',
		'blog_title'  		=> '',
		'menus' 			=> array(
			'menu-1' => 'Primary Menu',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			)
		)
	),
	'premium_demos' => array(

		array(
			'screen'			=> $git_url . 'medical/medical.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/the100-pro/medical/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/the100-pro/',
			'demo_name'			=> 'Medical Demo',
		),
		array(
			'screen'			=> $git_url . 'creative/creative.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/the100-pro/creative/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/the100-pro/',
			'demo_name'			=> 'Creative Demo',
		),
		array(
			'screen'			=> $git_url . 'travel/travel.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/the100-pro/travel/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/the100-pro/',
			'demo_name'			=> 'Travel Demo',
		),
		array(
			'screen'			=> $git_url . 'ecommerce/ecommerce.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/the100-pro/ecommerce/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/the100-pro/',
			'demo_name'			=> 'Ecommerce Demo',
		),
		array(
			'screen'			=> $git_url . 'blog/blog.jpg',
			'preview_url'		=> 'https://8degreethemes.com/demo/the100-pro/blog/',
			'upgrade_url'		=> 'https://8degreethemes.com/wordpress-themes/the100-pro/',
			'demo_name'			=> 'Blog Demo',
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";