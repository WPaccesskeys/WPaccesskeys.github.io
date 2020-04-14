<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/apam-demos/';
$data = array(
	'magazine' => array(
		'demo_name' => 'magazine',
		'xml_file'     		=> $git_url . 'magazine/content.xml',
		'widgets_file'  	=> $git_url . 'magazine/widgets.wie',
		'theme_settings'  	=> $git_url . 'magazine/customizer_options.dat',
		'screen'			=> $git_url . 'magazine/magazine.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/apam/magazine',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'magazine/themeoptions.json',
			'option_name' 	=> 'apam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
				array(
					'slug'      => 'yith-woocommerce-wishlist',
					'init' 	=> 'yith-woocommerce-wishlist/init.php',
					'name' 	=> 'YITH WooCommerce Wishlist',
				),
				array(
					'slug'      => 'yith-woocommerce-quick-view',
					'init' 	=> 'yith-woocommerce-quick-view/init.php',
					'name' 	=> 'YITH WooCommerce Quick View',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
	),
	'news' => array(
		'demo_name' => 'news',
		'xml_file'     		=> $git_url . 'news/content.xml',
		'widgets_file'  	=> $git_url . 'news/widgets.wie',
		'theme_settings'  	=> $git_url . 'news/customizer_options.dat',
		'screen'			=> $git_url . 'news/news.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/apam/news',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'news/themeoptions.json',
			'option_name' 	=> 'apam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
				array(
					'slug'      => 'yith-woocommerce-wishlist',
					'init' 	=> 'yith-woocommerce-wishlist/init.php',
					'name' 	=> 'YITH WooCommerce Wishlist',
				),
				array(
					'slug'      => 'yith-woocommerce-quick-view',
					'init' 	=> 'yith-woocommerce-quick-view/init.php',
					'name' 	=> 'YITH WooCommerce Quick View',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
	),
	'tech' => array(
		'demo_name' => 'tech',
		'xml_file'     		=> $git_url . 'tech/content.xml',
		'widgets_file'  	=> $git_url . 'tech/widgets.wie',
		'theme_settings'  	=> $git_url . 'tech/customizer_options.dat',
		'screen'			=> $git_url . 'tech/tech.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/apam/tech',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'tech/themeoptions.json',
			'option_name' 	=> 'apam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
	),
	'gaming' => array(
		'demo_name' => 'gaming',
		'xml_file'     		=> $git_url . 'gaming/content.xml',
		'widgets_file'  	=> $git_url . 'gaming/widgets.wie',
		'theme_settings'  	=> $git_url . 'gaming/customizer_options.dat',
		'screen'			=> $git_url . 'gaming/gaming.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/apam/gaming',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'gaming/themeoptions.json',
			'option_name' 	=> 'apam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
	),
	'health' => array(
		'demo_name' => 'health',
		'xml_file'     		=> $git_url . 'health/content.xml',
		'widgets_file'  	=> $git_url . 'health/widgets.wie',
		'theme_settings'  	=> $git_url . 'health/customizer_options.dat',
		'screen'			=> $git_url . 'health/health.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/apam/health',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'health/themeoptions.json',
			'option_name' 	=> 'apam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
	),
	'arab' => array(
		'demo_name' => 'arab',
		'xml_file'     		=> $git_url . 'arab/content.xml',
		'widgets_file'  	=> $git_url . 'arab/widgets.wie',
		'theme_settings'  	=> $git_url . 'arab/customizer_options.dat',
		'screen'			=> $git_url . 'arab/arab.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/apam/arab',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'arab/themeoptions.json',
			'option_name' 	=> 'apam_options',
		),
		'blog_title'  		=> '',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'        => 'redux-framework',
					'init'    =>'redux-framework/redux-framework.php',
					'name'       => 'Redux Framework',
				),
				array(
					'slug'      => 'elementor',
					'init' 	=> 'elementor/elementor.php',
					'name' 	=> 'Elementor',
				),
				array(
					'slug'      => 'ultimate-form-builder-lite',
					'init' 	=> 'ultimate-form-builder-lite/ultimate-form-builder-lite.php',
					'name' 	=> 'Ultimate Form Builder Lite',
				),
			),
			'premium' => array()
		)
	),
	'premium_demos' => array(
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (".getcwd().")  and find config.json downloaded there.</h2>";