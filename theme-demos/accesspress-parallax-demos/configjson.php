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
					'slug'  	=> 'wp-floating-menu',
					'init'  	=> 'wp-floating-menu/wp-floating-menu.php',
					'name'  	=> 'WP Floating Menu',
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
					'slug'  	=> 'wp-floating-menu',
					'init'  	=> 'wp-floating-menu/wp-floating-menu.php',
					'name'  	=> 'WP Floating Menu',
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
					'slug'  	=> 'wp-floating-menu',
					'init'  	=> 'wp-floating-menu/wp-floating-menu.php',
					'name'  	=> 'WP Floating Menu',
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
					'slug'  	=> 'wp-floating-menu',
					'init'  	=> 'wp-floating-menu/wp-floating-menu.php',
					'name'  	=> 'WP Floating Menu',
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
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'  	=> 'wp-floating-menu',
					'init'  	=> 'wp-floating-menu/wp-floating-menu.php',
					'name'  	=> 'WP Floating Menu',
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
					'slug'  	=> 'wp-floating-menu',
					'init'  	=> 'wp-floating-menu/wp-floating-menu.php',
					'name'  	=> 'WP Floating Menu',
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

/*
<?php
$settings = get_option( 'accesspress_parallax' );
$encoded = json_encode($settings);
echo '<pre>';
   print_r($encoded);
echo '</pre>';
?>

/*
add_filter('adi_demos_data','zigcy_demo_config');

function zigcy_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/zigcy-demos/';
			$data = array(

				'furniture' => array(
					'demo_name'			=> esc_html__('Furniture Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'furniture/furniture.xml',
					'theme_settings' 	=> $git_url . 'furniture/furniture.dat',
					'widgets_file'  	=> $git_url . 'furniture/furniture.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'furniture/furniture.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'furniture/furniture.jpg',
					'rev_slider' 		=> $git_url . 'furniture/furniture.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-one',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),



				'fashion' => array(
					'demo_name'			=> esc_html__('Fashion Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'fashion/fashion.xml',
					'theme_settings' 	=> $git_url . 'fashion/fashion.dat',
					'widgets_file'  	=> $git_url . 'fashion/fashion.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'fashion/fashion.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'fashion/fashion.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-two',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blogs',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
						),
					),
				),


				'electronics' => array(
					'demo_name'			=> esc_html__('Electronics Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'electronics/electronics.xml',
					'theme_settings' 	=> $git_url . 'electronics/electronics.dat',
					'widgets_file'  	=> $git_url . 'electronics/electronics.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'electronics/electronics.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'electronics/electronics.jpg',
					'rev_slider' 		=> $git_url . 'electronics/electronics.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-three',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),
				
				'organic' => array(
					'demo_name'			=> esc_html__('Organic Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'organic/organic.xml',
					'theme_settings' 	=> $git_url . 'organic/organic.dat',
					'widgets_file'  	=> $git_url . 'organic/organic.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'organic/organic.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'organic/organic.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-four',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blogs',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
						),
					),
				),


				'watches' => array(
					'demo_name'			=> esc_html__('Watches Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'watches/watches.xml',
					'widgets_file'  	=> $git_url . 'watches/watches.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'watches/watches.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'watches/watches.jpg',
					'rev_slider' 		=> $git_url . 'watches/watches.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-five',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),



				'cosmetics' => array(
					'demo_name'			=> esc_html__('Cosmetics Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'cosmetics/cosmetics.xml',
					'widgets_file'  	=> $git_url . 'cosmetics/cosmetics.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'cosmetics/cosmetics.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
					'rev_slider' 		=> $git_url . 'cosmetics/cosmetics.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),

			/*	'premium_demos' => array(

						array(
							'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
							'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
							'upgrade_url'		=> 'https://accesspressthemes.com/',
							'demo_name'			=> 'Groshory Shop',
						),
						array(
							'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
							'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
							'upgrade_url'		=> 'https://accesspressthemes.com/',
							'demo_name'			=> 'Food Shop',
						),
						array(
							'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
							'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
							'upgrade_url'		=> 'https://accesspressthemes.com/',
							'demo_name'			=> 'Watches Shop',
						),
					),


				);
return $data;
} */