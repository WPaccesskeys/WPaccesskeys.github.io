<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress_parallax_pro-demos/';
$data = array(
	'demo1' => array(
		'demo_name' => 'Demo1',
		'xml_file'     		=> $git_url . 'demo1/content.xml',
		'theme_settings' 	=> $git_url . 'demo1/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'demo1/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'demo1/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'screen'			=> $git_url . 'demo1/demo1.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro1/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Menu 1',
			'topmenu' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'demo2' => array(
		'demo_name' => 'Demo2',
		'xml_file'     		=> $git_url . 'demo2/content.xml',
		'theme_settings' 	=> $git_url . 'demo2/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'demo2/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'demo2/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'screen'			=> $git_url . 'demo2/demo2.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro1/demo2/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu',
			'topmenu' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'demo3' => array(
		'demo_name' => 'Demo3',
		'xml_file'     		=> $git_url . 'demo3/content.xml',
		'theme_settings' 	=> $git_url . 'demo3/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'demo3/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'demo3/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'screen'			=> $git_url . 'demo3/demo3.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro1/demo3/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu',
			'topmenu' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'demo4' => array(
		'demo_name' => 'Demo4',
		'xml_file'     		=> $git_url . 'demo4/content.xml',
		'theme_settings' 	=> $git_url . 'demo4/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'demo4/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'demo4/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'screen'			=> $git_url . 'demo4/demo4.jpg',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro1/demo4/',
		'is_shop'			=> true,
		'menus' 			=> array(
			'topmenu' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'agency' => array(
		'demo_name' => 'agency',
		'xml_file'     		=> $git_url . 'agency/content.xml',
		'theme_settings' 	=> $git_url . 'agency/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'agency/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'agency/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'home_title'  		=> 'Home',
		'screen'			=> $git_url . 'agency/agency.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro/agency/',
		'is_shop'			=> true,
		'menus' 			=> array(
			'primary' => 'Menu 1'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'corporate' => array(
		'demo_name' => 'corporate',
		'xml_file'     		=> $git_url . 'corporate/content.xml',
		'theme_settings' 	=> $git_url . 'corporate/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'corporate/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'corporate/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'home_title'  		=> 'Home',
		'screen'			=> $git_url . 'corporate/corporate.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro/corporate/',
		'is_shop'			=> true,
		'menus' 			=> array(
			'primary' => 'Menu 1'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'app' => array(
		'demo_name' => 'app',
		'xml_file'     		=> $git_url . 'app/content.xml',
		'theme_settings' 	=> $git_url . 'app/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'app/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'app/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'home_title'  		=> 'Home',
		'screen'			=> $git_url . 'app/app.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro/app/',
		'is_shop'			=> true,
		'menus' 			=> array(
			'primary' => 'Menu 1'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'small-biz' => array(
		'demo_name' => 'small-biz',
		'xml_file'     		=> $git_url . 'small-biz/content.xml',
		'theme_settings' 	=> $git_url . 'small-biz/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'small-biz/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'small-biz/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'home_title'  		=> 'Home',
		'screen'			=> $git_url . 'small-biz/small-biz.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro/small-biz/',
		'is_shop'			=> true,
		'menus' 			=> array(
			'primary' => 'Menu 1'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	'woocommerce' => array(
		'demo_name' => 'woocommerce',
		'xml_file'     		=> $git_url . 'woocommerce/content.xml',
		'theme_settings' 	=> $git_url . 'woocommerce/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'woocommerce/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'woocommerce/themeoptions.json',
			'option_name' 	=> 'accesspress_parallax_pro',
		),
		'home_title'  		=> 'Home',
		'screen'			=> $git_url . 'woocommerce/woocommerce.png',
		'preview_url'		=> 'http://demo.accesspressthemes.com/accesspress-parallax-pro/woocommerce/',
		'is_shop'			=> true,
		'menus' 			=> array(
			'primary' => 'Menu 1'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'elementor',
					'init'  	=> 'elementor/elementor.php',
					'name'  	=> 'Elementor',
				),
				array(
					'slug'  => 'classic-editor',
					'init' 	=> 'classic-editor/classic-editor.php',
					'name' 	=> 'Classic Editor',
				),
				array(
					'slug'  => 'siteorigin-panels',
					'init' 	=> 'siteorigin-panels/siteorigin-panels.php',
					'name' 	=> 'SiteOrigin Panels',
				),
				array(
					'slug'  => 'black-studio-tinymce-widget',
					'init' 	=> 'black-studio-tinymce-widget/black-studio-tinymce-widget.php',
					'name' 	=> 'Black Studio TinyMCE Plugin',
				),
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
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
	)
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the current folder (config.json) and find config.json downloaded there.</h2>";
/*
<?php
$settings = get_option( 'accesspress_parallax_pro' );
$encoded = json_encode($settings);
echo '<pre>';
   print_r($encoded);
echo '</pre>';
?>
*/