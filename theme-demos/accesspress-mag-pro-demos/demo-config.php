<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','accesspress_mag_pro_demo_config');

function accesspress_mag_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress-mag-pro-demos/';
			$data = array(

				'editorial' => array(
					'demo_name'			=> esc_html__('Editorial Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'editorial/contents.xml',
					'theme_settings' 	=> $git_url . 'editorial/customizer.dat',
					'widgets_file'  	=> $git_url . 'editorial/widgets.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'editorial/options.json',
											'option_name' 	=> 'accesspress-mag-theme',
										),
					'screen'			=> $git_url . 'editorial/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/demo-accesspress-mag-pro/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' 			=> 'Menu 1',
											'top_menu' 			=> 'Top Menu',
											'top_menu_right' 	=> 'Top Menu Right',
											'footer_menu'		=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
						),
						
					),
				),



				'fashion' => array(
					'demo_name'			=> esc_html__('Fashion Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'fashion/content.xml',
					'theme_settings' 	=> $git_url . 'fashion/customizer.dat',
					'widgets_file'  	=> $git_url . 'fashion/widgets.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'fashion/options.json',
											'option_name' 	=> 'accesspress-mag-theme',
										),
					'screen'			=> $git_url . 'fashion/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/demo-accesspress-mag-pro/fashion',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' 			=> 'Primary Menu',
											'top_menu' 			=> 'Top Menu',
											'top_menu_right' 	=> 'Top Menu Right',
											'footer_menu'		=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
						),
						
					),
				),


				'news' => array(
					'demo_name'			=> esc_html__('News Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'news/content.xml',
					'theme_settings' 	=> $git_url . 'news/customizer.dat',
					'widgets_file'  	=> $git_url . 'news/widgets.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'news/options.json',
											'option_name' 	=> 'accesspress-mag-theme',
										),
					'screen'			=> $git_url . 'news/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/demo-accesspress-mag-pro/news',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' 			=> 'Menu 1',
											'top_menu' 			=> 'Top Menu',
											'top_menu_right' 	=> 'Top Menu Right',
											'footer_menu'		=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
						),
						
					),
				),


				'sports' => array(
					'demo_name'			=> esc_html__('Sports Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'sports/content.xml',
					'theme_settings' 	=> $git_url . 'sports/customizer.dat',
					'widgets_file'  	=> $git_url . 'sports/widgets.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'sports/options.json',
											'option_name' 	=> 'accesspress-mag-theme',
										),
					'screen'			=> $git_url . 'sports/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/demo-accesspress-mag-pro/sports',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' 			=> 'Primary Menu',
											'top_menu' 			=> 'Top Menu',
											'top_menu_right' 	=> 'Top Menu Right',
											'footer_menu'		=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
						),
						
					),
				),


			);
	return $data;
}