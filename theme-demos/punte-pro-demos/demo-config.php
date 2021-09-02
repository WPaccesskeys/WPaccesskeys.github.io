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
					'xml_file'     		=> $git_url . 'agency-pro/agency.xml',
					'theme_settings' 	=> $git_url . 'agency-pro/agency.dat',
					'widgets_file'  	=> $git_url . 'agency-pro/agency.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'agency-pro/agency.json',
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
							
						),
					),
				),

				'corporate-pro' => array(
					'demo_name'			=> ('Corporate Demo'),
					'xml_file'     		=> $git_url . 'corporate-pro/corporate.xml',
					'theme_settings' 	=> $git_url . 'corporate-pro/corporate.dat',
					'widgets_file'  	=> $git_url . 'corporate-pro/corporate.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'corporate-pro/corporate.json',
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
							
						),
					),
				),
				
				'saas' => array(
					'demo_name'			=> ('Saas Demo'),
					'xml_file'     		=> $git_url . 'saas/saas.xml',
					'theme_settings' 	=> $git_url . 'saas/saas.dat',
					'widgets_file'  	=> $git_url . 'saas/saas.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'saas/saas.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'saas/saas.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/sass',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'business' => array(
					'demo_name'			=> ('Business Demo'),
					'xml_file'     		=> $git_url . 'business/business.xml',
					'theme_settings' 	=> $git_url . 'business/business.dat',
					'widgets_file'  	=> $git_url . 'business/business.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'business/business.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'business/business.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/business',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),

				'construction' => array(
					'demo_name'			=> ('Construction Demo'),
					'xml_file'     		=> $git_url . 'construction/construction.xml',
					'theme_settings' 	=> $git_url . 'construction/construction.dat',
					'widgets_file'  	=> $git_url . 'construction/construction.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'construction/construction.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'construction/construction.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/construction',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'gym' => array(
					'demo_name'			=> ('Gym Demo'),
					'xml_file'     		=> $git_url . 'gym/gym.xml',
					'theme_settings' 	=> $git_url . 'gym/gym.dat',
					'widgets_file'  	=> $git_url . 'gym/gym.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'gym/gym.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'gym/gym.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/gym',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'hotel' => array(
					'demo_name'			=> ('Hotel Demo'),
					'xml_file'     		=> $git_url . 'hotel/hotel.xml',
					'theme_settings' 	=> $git_url . 'hotel/hotel.dat',
					'widgets_file'  	=> $git_url . 'hotel/hotel.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'hotel/hotel.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'hotel/hotel.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/hotel',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'kids' => array(
					'demo_name'			=> ('Kids Demo'),
					'xml_file'     		=> $git_url . 'kids/kids.xml',
					'theme_settings' 	=> $git_url . 'kids/kids.dat',
					'widgets_file'  	=> $git_url . 'kids/kids.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'kids/kids.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'kids/kids.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/kids',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'blog' => array(
					'demo_name'			=> ('Blog Demo'),
					'xml_file'     		=> $git_url . 'blog/blog.xml',
					'theme_settings' 	=> $git_url . 'blog/blog.dat',
					'widgets_file'  	=> $git_url . 'blog/blog.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'blog/blog.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'blog/blog.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/blog-demo',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'one-product' => array(
					'demo_name'			=> ('One Product Demo'),
					'xml_file'     		=> $git_url . 'one-product/one-product.xml',
					'theme_settings' 	=> $git_url . 'one-product/one-product.dat',
					'widgets_file'  	=> $git_url . 'one-product/one-product.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'one-product/one-product.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'one-product/one-product.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/one-product',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'restaurant' => array(
					'demo_name'			=> ('Restaurant Demo'),
					'xml_file'     		=> $git_url . 'restaurant/restaurant.xml',
					'theme_settings' 	=> $git_url . 'restaurant/restaurant.dat',
					'widgets_file'  	=> $git_url . 'restaurant/restaurant.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'restaurant/restaurant.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'restaurant/restaurant.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/restaurant-lite',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Primary Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'wedding' => array(
					'demo_name'			=> ('Wedding Demo'),
					'xml_file'     		=> $git_url . 'wedding/wedding.xml',
					'theme_settings' 	=> $git_url . 'wedding/wedding.dat',
					'widgets_file'  	=> $git_url . 'wedding/wedding.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'wedding/wedding.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'wedding/wedding.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/wedding',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),


				'yoga' => array(
					'demo_name'			=> ('Yoga Demo'),
					'xml_file'     		=> $git_url . 'yoga/yoga.xml',
					'theme_settings' 	=> $git_url . 'yoga/yoga.dat',
					'widgets_file'  	=> $git_url . 'yoga/yoga.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'yoga/yoga.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'yoga/yoga.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/yoga',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
					),
				),

				'charity' => array(
					'demo_name'			=> ('Charity Demo'),
					'xml_file'     		=> $git_url . 'charity/charity.xml',
					'theme_settings' 	=> $git_url . 'charity/charity.dat',
					'widgets_file'  	=> $git_url . 'charity/charity.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'charity/charity.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'charity/charity.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/charity',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Menu 1',
											),
					'required_plugins'  => array(
						'free' => array(
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
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
						),
						'premium' => array(
							
						),
					),
				),

				'online-store' => array(
					'demo_name'			=> ('Online Store'),
					'xml_file'     		=> $git_url . 'online-store/online-store.xml',
					'theme_settings' 	=> $git_url . 'online-store/online-store.dat',
					'widgets_file'  	=> $git_url . 'online-store/online-store.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'online-store/online-store.json',
											'option_name' 	=> 'punte_options',
										),
					'screen'			=> $git_url . 'online-store/online-store.jpg',
					'preview_url'		=> 'https://demo.thepunte.com/punte/store/',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
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
							
						),
					),
				),

			);
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/Accesskeys/config.json) and find config.json downloaded there.</h2>";