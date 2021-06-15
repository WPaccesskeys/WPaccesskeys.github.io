<?php 
/**
* Demo import configuration file
*
*
*/

// function punte_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/punte-pro-demos/';

			$data = array(

				'agency-pro' => array(
					'demo_name'			=> ('Agency Demo'),
					'xml_file'     		=> $git_url . 'agency/agency.xml',
					'theme_settings' 	=> $git_url . 'agency/agency.dat',
					'widgets_file'  	=> $git_url . 'agency/agency.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'agency/agency.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'agency-pro/agency-pro.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/agency/',
					'is_shop'			=> false,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'elementor',
								'init'  	=> 'elementor/elementor.php',
								'name'  	=> 'Elementor',
							),
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
							),
							array(
								'slug'  	=> 'ap-companion',
								'init'  	=> 'ap-companion/ap-companion.php',
								'name'  	=> 'AP Companion',
							),
							
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							)
						),
					),
				),

				'corporate-pro' => array(
					'demo_name'			=> ('Corporate Demo'),
					'xml_file'     		=> $git_url . 'corporate/corporate.xml',
					'theme_settings' 	=> $git_url . 'corporate/corporate.dat',
					'widgets_file'  	=> $git_url . 'corporate/corporate.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'corporate/corporate.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'corporate-pro/corporate-pro.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/corporate/',
					'is_shop'			=> false,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'elementor',
								'init'  	=> 'elementor/elementor.php',
								'name'  	=> 'Elementor',
							),
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
							),
							array(
								'slug'  	=> 'ap-companion',
								'init'  	=> 'ap-companion/ap-companion.php',
								'name'  	=> 'AP Companion',
							),
							
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
							
						),
					),
				),


				'corporate-v2-pro' => array(
					'demo_name'			=> ('Corporate Demo'),
					'xml_file'     		=> $git_url . 'corporate-v2-pro/corporate-v2-pro.xml',
					'theme_settings' 	=> $git_url . 'corporate-v2-pro/corporate-v2-pro.dat',
					'widgets_file'  	=> $git_url . 'corporate-v2-pro/corporate-v2-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'corporate-v2-pro/corporate-v2-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'corporate-v2-pro/corporate-v2-pro.jpg',
					'rev_slider' 		=> $git_url . 'corporate-v2-pro/corporate-v2-pro.zip',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/corporate-two',
					'is_shop'			=> false,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
							),
							
							
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),

							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
							
						),
					),
				),


				'digital-corporate-pro' => array(
					'demo_name'			=> ('Corporate Demo'),
					'xml_file'     		=> $git_url . 'digital-corporate-pro/digital-corporate-pro.xml',
					'theme_settings' 	=> $git_url . 'digital-corporate-pro/digital-corporate-pro.dat',
					'widgets_file'  	=> $git_url . 'digital-corporate-pro/digital-corporate-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'digital-corporate-pro/digital-corporate-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'digital-corporate-pro/digital-corporate-pro.jpg',
					'rev_slider' 		=> $git_url . 'digital-corporate-pro/digital-corporate-pro.zip',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/corporate-three/',
					'is_shop'			=> false,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
							),
							
							
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),

							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
						),
					),
				),


				'ecommerce-furniture-pro' => array(
					'demo_name'			=> ('Furniture Store'),
					'xml_file'     		=> $git_url . 'ecommerce-furniture-pro/ecommerce-furniture-pro.xml',
					'theme_settings' 	=> $git_url . 'ecommerce-furniture-pro/ecommerce-furniture-pro.dat',
					'widgets_file'  	=> $git_url . 'ecommerce-furniture-pro/ecommerce-furniture-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'ecommerce-furniture-pro/ecommerce-furniture-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'ecommerce-furniture-pro/ecommerce-furniture-pro.jpg',
					'rev_slider' 		=> $git_url . 'ecommerce-furniture-pro/ecommerce-furniture-pro.zip',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/ecommerce-furniture/',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' => 'Main Menu',
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
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
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
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),

							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
						),
					),
				),


				'kindergarten-pro' => array(
					'demo_name'			=> ('Kindergarten'),
					'xml_file'     		=> $git_url . 'kindergarten-pro/kindergarten-pro.xml',
					'theme_settings' 	=> $git_url . 'kindergarten-pro/kindergarten-pro.dat',
					'widgets_file'  	=> $git_url . 'kindergarten-pro/kindergarten-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'kindergarten-pro/kindergarten-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'kindergarten-pro/kindergarten-pro.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/kindergarten',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
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
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
						),
					),
				),


				'magazine-pro' => array(
					'demo_name'			=> ('Magazine'),
					'xml_file'     		=> $git_url . 'magazine-pro/magazine-pro.xml',
					'theme_settings' 	=> $git_url . 'magazine-pro/magazine-pro.dat',
					'widgets_file'  	=> $git_url . 'magazine-pro/magazine-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'magazine-pro/magazine-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'magazine-pro/magazine-pro.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/magazine',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' 	=> 'Primary Menu',
											'secondary' => 'Secondary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'elementor',
								'init'  	=> 'elementor/elementor.php',
								'name'  	=> 'Elementor',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
							),
						
							
							
						),
						'premium' => array(

							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
							
						),
					),
				),


				'newspaper-pro' => array(
					'demo_name'			=> ('Newspaper'),
					'xml_file'     		=> $git_url . 'newspaper-pro/newspaper-pro.xml',
					'theme_settings' 	=> $git_url . 'newspaper-pro/newspaper-pro.dat',
					'widgets_file'  	=> $git_url . 'newspaper-pro/newspaper-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'newspaper-pro/newspaper-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'newspaper-pro/newspaper-pro.jpg',
					'rev_slider' 		=> $git_url . 'newspaper-pro/newspaper-pro.zip',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/newspaper-magazine/',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' 	=> 'Main Menu',
											'secondary' => 'Header Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
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
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),

							array(
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
						),
					),
				),


				'onepage-pro' => array(
					'demo_name'			=> ('Onepage'),
					'xml_file'     		=> $git_url . 'onepage-pro/onepage-pro.xml',
					'theme_settings' 	=> $git_url . 'onepage-pro/onepage-pro.dat',
					'widgets_file'  	=> $git_url . 'onepage-pro/onepage-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'onepage-pro/onepage-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'onepage-pro/onepage-pro.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/onepage/',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' 	=> 'Main Menu'
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
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
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
							
						),
					),
				),


				'tech-magazine-pro' => array(
					'demo_name'			=> ('Tech Magazine'),
					'xml_file'     		=> $git_url . 'tech-magazine-pro/tech-magazine-pro.xml',
					'theme_settings' 	=> $git_url . 'tech-magazine-pro/tech-magazine-pro.dat',
					'widgets_file'  	=> $git_url . 'tech-magazine-pro/tech-magazine-pro.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'tech-magazine-pro/tech-magazine-pro.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'tech-magazine-pro/tech-magazine-pro.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte-pro/tech-magazine',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' 	=> 'Main Menu'
											),
					'required_plugins'  => array(
						'free' => array(
							
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							array(
								'slug'  	=> 'redux-framework',
								'init'  	=> 'redux-framework/redux-framework.php',
								'name'  	=> 'Redux Framework',
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
								'slug' 		=> 'punte-companion',
								'init'  	=> 'punte-companion/punte-companion.php',
								'name' 		=> 'Punte Companion',
								'class'		=> 'Punte_Companion',
							),
							array(
								'slug' 		=> 'ap-companion-pro',
								'init'  	=> 'ap-companion-pro/ap-companion-pro.php',
								'name' 		=> 'AP Companion Pro',
								'class'		=> 'AP_COMPANION_PRO',
							),
						),
					),
				),

			);

// 	return $data;
// }

echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/Accesskeys/config.json) and find config.json downloaded there.</h2>";