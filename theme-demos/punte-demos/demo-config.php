<?php 
/**
* Demo import configuration file
*
*
*/

function punte_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/punte-demos/';
			$data = array(


				'saas' => array(
					'demo_name'			=> esc_html__('Saas Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Business Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Construction Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Gym Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Hotel Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Kids Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Blog Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('One Product Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Restaurant Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Wedding Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Yoga Demo','access-demo-importer'),
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
					'demo_name'			=> esc_html__('Charity Demo','access-demo-importer'),
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



			);

	return $data;
}