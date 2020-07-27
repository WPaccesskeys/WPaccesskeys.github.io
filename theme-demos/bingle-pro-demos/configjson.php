<?php 
/**
* Demo import configuration file
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/bingle-pro-demos/';
$data = array(
	'broadband' => array(
		'demo_name' => 'Broadband - Demo',
		'xml_file'     		=> $git_url . 'broadband/content.xml',
		'theme_settings' 	=> $git_url . 'broadband/options.dat',
		'widgets_file'  	=> $git_url . 'broadband/widgets.wie',
		'screen'			=> $git_url . 'broadband/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/broadband/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/corporate/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'charity' => array(
		'demo_name' => 'Charity - Demo',
		'xml_file'     		=> $git_url . 'charity/content.xml',
		'theme_settings' 	=> $git_url . 'charity/options.dat',
		'widgets_file'  	=> $git_url . 'charity/widgets.wie',
		'screen'			=> $git_url . 'charity/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/charity/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'travel' => array(
		'demo_name' => 'Travel - Demo',
		'xml_file'     		=> $git_url . 'travel/content.xml',
		'theme_settings' 	=> $git_url . 'travel/options.dat',
		'widgets_file'  	=> $git_url . 'travel/widgets.wie',
		'screen'			=> $git_url . 'travel/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/travel/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'magazine' => array(
		'demo_name' => 'Magazine - Demo',
		'xml_file'     		=> $git_url . 'magazine/content.xml',
		'theme_settings' 	=> $git_url . 'magazine/options.dat',
		'widgets_file'  	=> $git_url . 'magazine/widgets.wie',
		'screen'			=> $git_url . 'magazine/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/magazine/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'main' => array(
		'demo_name' => 'Main - Demo',
		'xml_file'     		=> $git_url . 'main/content.xml',
		'theme_settings' 	=> $git_url . 'main/options.dat',
		'widgets_file'  	=> $git_url . 'main/widgets.wie',
		'screen'			=> $git_url . 'main/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/main/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Primary Menu'
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
	'app' => array(
		'demo_name' => 'App - Demo',
		'xml_file'     		=> $git_url . 'app/content.xml',
		'theme_settings' 	=> $git_url . 'app/options.dat',
		'widgets_file'  	=> $git_url . 'app/widgets.wie',
		'screen'			=> $git_url . 'app/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/app/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'minimal' => array(
		'demo_name' => 'Minimal - Demo',
		'xml_file'     		=> $git_url . 'minimal/content.xml',
		'theme_settings' 	=> $git_url . 'minimal/options.dat',
		'widgets_file'  	=> $git_url . 'minimal/widgets.wie',
		'screen'			=> $git_url . 'minimal/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/minimal/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'event' => array(
		'demo_name' => 'Event - Demo',
		'xml_file'     		=> $git_url . 'event/content.xml',
		'theme_settings' 	=> $git_url . 'event/options.dat',
		'widgets_file'  	=> $git_url . 'event/widgets.wie',
		'screen'			=> $git_url . 'event/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/event/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'law' => array(
		'demo_name' => 'Law - Demo',
		'xml_file'     		=> $git_url . 'law/content.xml',
		'theme_settings' 	=> $git_url . 'law/options.dat',
		'widgets_file'  	=> $git_url . 'law/widgets.wie',
		'screen'			=> $git_url . 'law/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/law/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'dental' => array(
		'demo_name' => 'Dental - Demo',
		'xml_file'     		=> $git_url . 'dental/content.xml',
		'theme_settings' 	=> $git_url . 'dental/options.dat',
		'widgets_file'  	=> $git_url . 'dental/widgets.wie',
		'screen'			=> $git_url . 'dental/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/dental/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'woo' => array(
		'demo_name' => 'WooCommerce - Demo',
		'xml_file'     		=> $git_url . 'woo/content.xml',
		'theme_settings' 	=> $git_url . 'woo/options.dat',
		'widgets_file'  	=> $git_url . 'woo/widgets.wie',
		'screen'			=> $git_url . 'woo/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/woo/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'education' => array(
		'demo_name' => 'Education - Demo',
		'xml_file'     		=> $git_url . 'education/content.xml',
		'theme_settings' 	=> $git_url . 'education/options.dat',
		'widgets_file'  	=> $git_url . 'education/widgets.wie',
		'screen'			=> $git_url . 'education/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/education/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/resume/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'blog' => array(
		'demo_name' => 'Blog - Demo',
		'xml_file'     		=> $git_url . 'blog/content.xml',
		'theme_settings' 	=> $git_url . 'blog/options.dat',
		'widgets_file'  	=> $git_url . 'blog/widgets.wie',
		'screen'			=> $git_url . 'blog/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/blog/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
	'gym' => array(
		'demo_name' => 'Gym - Demo',
		'xml_file'     		=> $git_url . 'gym/content.xml',
		'theme_settings' 	=> $git_url . 'gym/options.dat',
		'widgets_file'  	=> $git_url . 'gym/widgets.wie',
		'screen'			=> $git_url . 'gym/screenshot.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/bingle/gym/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu'
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
