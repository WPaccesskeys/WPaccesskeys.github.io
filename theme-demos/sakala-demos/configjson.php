<?php 
/**
* Demo import configuration file
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/sakala-demos/';
$data = array(
	
	'agency' => array(
		'demo_name' => 'agency - Demo',
		'xml_file'     		=> $git_url . 'agency/content.xml',
		'theme_settings' 	=> $git_url . 'agency/options.dat',
		'widgets_file'  	=> $git_url . 'agency/widgets.wie',
		'screen'			=> $git_url . 'agency/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/sakala/agency/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'ap-companion',
					'init' 	=> 'ap-companion/ap-companion.php',
					'name' 	=> 'Ap Companion',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			),
			'premium' => array()
		)
	),
	'architect' => array(
		'demo_name' => 'Architect - Demo',
		'xml_file'     		=> $git_url . 'architect/content.xml',
		'theme_settings' 	=> $git_url . 'architect/options.dat',
		'widgets_file'  	=> $git_url . 'architect/widgets.wie',
		'screen'			=> $git_url . 'architect/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/sakala/architect/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'ap-companion',
					'init' 	=> 'ap-companion/ap-companion.php',
					'name' 	=> 'Ap Companion',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			),
			'premium' => array()
		)
	),
	'beauty' => array(
		'demo_name' => 'Beauty - Demo',
		'xml_file'     		=> $git_url . 'beauty/content.xml',
		'theme_settings' 	=> $git_url . 'beauty/options.dat',
		'widgets_file'  	=> $git_url . 'beauty/widgets.wie',
		'screen'			=> $git_url . 'beauty/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/sakala/beauty/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'ap-companion',
					'init' 	=> 'ap-companion/ap-companion.php',
					'name' 	=> 'Ap Companion',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			),
			'premium' => array()
		)
	),
	'corporate' => array(
		'demo_name' => 'Corporate - Demo',
		'xml_file'     		=> $git_url . 'corporate/content.xml',
		'theme_settings' 	=> $git_url . 'corporate/options.dat',
		'widgets_file'  	=> $git_url . 'corporate/widgets.wie',
		'screen'			=> $git_url . 'corporate/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/sakala/corporate/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'ap-companion',
					'init' 	=> 'ap-companion/ap-companion.php',
					'name' 	=> 'Ap Companion',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			),
			'premium' => array()
		)
	),
	'resume' => array(
		'demo_name' => 'Resume - Demo',
		'xml_file'     		=> $git_url . 'resume/content.xml',
		'theme_settings' 	=> $git_url . 'resume/options.dat',
		'widgets_file'  	=> $git_url . 'resume/widgets.wie',
		'screen'			=> $git_url . 'resume/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/sakala/resume/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'ap-companion',
					'init' 	=> 'ap-companion/ap-companion.php',
					'name' 	=> 'Ap Companion',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			),
			'premium' => array()
		)
	),
	'woocommerce' => array(
		'demo_name' => 'Woocommerce - Demo',
		'xml_file'     		=> $git_url . 'woocommerce/content.xml',
		'theme_settings' 	=> $git_url . 'woocommerce/options.dat',
		'widgets_file'  	=> $git_url . 'woocommerce/widgets.wie',
		'screen'			=> $git_url . 'woocommerce/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/sakala/woocommerce/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'ap-companion',
					'init' 	=> 'ap-companion/ap-companion.php',
					'name' 	=> 'Ap Companion',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				)
			),
			'premium' => array()
		)
	),
);

echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);
