<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','zigcy_demo_config');

//function zigcy_demo_config(){

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress-parallax-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings' 	=> $git_url . 'default/customizer.dat',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'default/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax',
		),
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-parallax',
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				)
			),
			'premium' => array()
		)
	),
	'agency' => array(
		'demo_name' => 'agency',
		'xml_file'     		=> $git_url . 'agency/content.xml',
		'widgets_file'  	=> $git_url . 'agency/widgets.wie',
		'theme_settings' 	=> $git_url . 'agency/customizer.dat',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'agency/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax',
		),
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'screen'			=> $git_url . 'agency/agency.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-parallax/agency',
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				)
			),
			'premium' => array()
		)
	),
	'app' => array(
		'demo_name' => 'app',
		'xml_file'     		=> $git_url . 'app/content.xml',
		'widgets_file'  	=> $git_url . 'app/widgets.wie',
		'theme_settings' 	=> $git_url . 'app/customizer.dat',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'app/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax',
		),
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'screen'			=> $git_url . 'app/app.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-parallax/app',
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				)
			),
			'premium' => array()
		)
	),
	'corporate' => array(
		'demo_name' => 'corporate',
		'xml_file'     		=> $git_url . 'corporate/content.xml',
		'widgets_file'  	=> $git_url . 'corporate/widgets.wie',
		'theme_settings' 	=> $git_url . 'corporate/customizer.dat',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'corporate/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax',
		),
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'screen'			=> $git_url . 'corporate/corporate.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-parallax/corporate',
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				)
			),
			'premium' => array()
		)
	),
	'small-biz' => array(
		'demo_name' => 'small-biz',
		'xml_file'     		=> $git_url . 'small-biz/content.xml',
		'widgets_file'  	=> $git_url . 'small-biz/widgets.wie',
		'theme_settings' 	=> $git_url . 'small-biz/customizer.dat',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'small-biz/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax',
		),
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'screen'			=> $git_url . 'small-biz/small-biz.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-parallax/small-biz',
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				
				
			),
			'premium' => array()
		)
	),
	'woocommerce' => array(
		'demo_name' => 'woocommerce',
		'xml_file'     		=> $git_url . 'woocommerce/content.xml',
		'widgets_file'  	=> $git_url . 'woocommerce/widgets.wie',
		'theme_settings' 	=> $git_url . 'woocommerce/customizer.dat',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'woocommerce/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax',
		),
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
		),
		'screen'			=> $git_url . 'woocommerce/woocommerce.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-parallax/woocommerce',
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
			
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				)
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

echo "<h2>Check the folder (http://localhost/8degree/config.json) and find config.json downloaded there.</h2>";
//}

