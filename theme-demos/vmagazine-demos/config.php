<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','vmagazine_demo_config');

function vmagazine_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/vmagazine-demos/';
			$data = array(

			'world' => array(
				'demo_name'			=> esc_html__('World','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-one/demo-one.xml',
				'theme_settings' 	=> $git_url . 'demo-one/demo-one.dat',
				'widgets_file'  	=> $git_url . 'demo-one/demo-one.wie',
				'screen'			=> $git_url . 'demo-one/demo-one.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-one/',
				'is_shop'			=> true,
				'home_title'  		=> 'Home',
				'blog_title'  		=> 'Blogs',
				'posts_to_show'  	=> '10',
				'menus'				=> array(
						'primary_menu' 	=> 'primary menu',
			            'top_menu'      => 'Top Menus',
			            'footer_menu' 	=> 'Footer Menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'woocommerce',
							'init'  	=> 'woocommerce/woocommerce.php',
							'name'  	=> 'WooCommerce',
						),
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						
						
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						array(
							'slug' 		=> 'accesspress-social-pro',
							'init'  	=> 'accesspress-social-pro/accesspress-social-pro.php',
							'name' 		=> 'AccessPress Social Pro',
							'class'		=> 'APSS_Class',
						),
						
					),
				),
			),

			'tech' => array(
				'demo_name'			=> esc_html__('Tech','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-two/demo-two.xml',
				'theme_settings' 	=> $git_url . 'demo-two/demo-two.dat',
				'widgets_file'  	=> $git_url . 'demo-two/demo-two.wie',
				'screen'			=> $git_url . 'demo-two/demo-two.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-two/',
				'home_title'  		=> 'Home',
				'menus'				=> array(
					'primary_menu' 	=> 'primary menu',
		            'top_menu'      => 'top menu',
		            'footer_menu' 	=> 'Footer Menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						array(
							'slug'  	=> 'newsletter',
							'init'  	=> 'newsletter/plugin.php',
							'name'  	=> 'Newsletter',
						),
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						array(
							'slug' 		=> 'accesspress-social-pro',
							'init'  	=> 'accesspress-social-pro/accesspress-social-pro.php',
							'name' 		=> 'AccessPress Social Pro',
							'class'		=> 'APSS_Class',
						),
						
					),
				),
			),


			'travel' => array(
				'demo_name'			=> esc_html__('Travel','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-three/demo-three.xml',
				'theme_settings' 	=> $git_url . 'demo-three/demo-three.dat',
				'widgets_file'  	=> $git_url . 'demo-three/demo-three.wie',
				'screen'			=> $git_url . 'demo-three/demo-three.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-three/',
				'is_shop'			=> true,
				'home_title'  		=> 'Home',
				'menus'				=> array(
						'primary_menu' 	=> 'primary menu',
			            'footer_menu' 	=> 'Footer Menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'woocommerce',
							'init'  	=> 'woocommerce/woocommerce.php',
							'name'  	=> 'WooCommerce',
						),
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						
						
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						array(
							'slug' 		=> 'accesspress-social-pro',
							'init'  	=> 'accesspress-social-pro/accesspress-social-pro.php',
							'name' 		=> 'AccessPress Social Pro',
							'class'		=> 'APSS_Class',
						),
						
					),
				),
			),


			'sports' => array(
				'demo_name'			=> esc_html__('Sports','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-four/demo-four.xml',
				'theme_settings' 	=> $git_url . 'demo-four/demo-four.dat',
				'widgets_file'  	=> $git_url . 'demo-four/demo-four.wie',
				'screen'			=> $git_url . 'demo-four/demo-four.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-four/',
				'home_title'  		=> 'Home',
				'menus'				=> array(
						'primary_menu' 	=> 'Main Menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'Footer Menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						
						
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						array(
							'slug' 		=> 'accesspress-social-pro',
							'init'  	=> 'accesspress-social-pro/accesspress-social-pro.php',
							'name' 		=> 'AccessPress Social Pro',
							'class'		=> 'APSS_Class',
						),
						
					),
				),
			),


			'fitness' => array(
				'demo_name'			=> esc_html__('Fitness','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-fitness/demo-fitness.xml',
				'theme_settings' 	=> $git_url . 'demo-fitness/demo-fitness.dat',
				'widgets_file'  	=> $git_url . 'demo-fitness/demo-fitness.wie',
				'screen'			=> $git_url . 'demo-fitness/demo-fitness.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-five/',
				'home_title'  		=> 'Home',
				'is_shop'			=> true,
				'menus'				=> array(
						'primary_menu' 	=> 'primary menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'top menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						array(
							'slug'  	=> 'woocommerce',
							'init'  	=> 'woocommerce/woocommerce.php',
							'name'  	=> 'WooCommerce',
						),
						
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						
					),
				),
			),


			'food' => array(
				'demo_name'			=> esc_html__('Food','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-food/demo-food.xml',
				'theme_settings' 	=> $git_url . 'demo-food/demo-food.dat',
				'widgets_file'  	=> $git_url . 'demo-food/demo-food.wie',
				'screen'			=> $git_url . 'demo-food/demo-food.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-six/',
				'home_title'  		=> 'Home',
				'is_shop'			=> true,
				'menus'				=> array(
						'primary_menu' 	=> 'Main Menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'top menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						array(
							'slug'  	=> 'woocommerce',
							'init'  	=> 'woocommerce/woocommerce.php',
							'name'  	=> 'WooCommerce',
						),
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						
					),
				),
			),


			'fashion' => array(
				'demo_name'			=> esc_html__('Fashion','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-fashion/demo-fashion.xml',
				'theme_settings' 	=> $git_url . 'demo-fashion/demo-fashion.dat',
				'widgets_file'  	=> $git_url . 'demo-fashion/demo-fashion.wie',
				'screen'			=> $git_url . 'demo-fashion/demo-fashion.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-seven/',
				'home_title'  		=> 'Home',
				'is_shop'			=> true,
				'menus'				=> array(
						'primary_menu' 	=> 'Fashion Menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'top menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						array(
							'slug'  	=> 'newsletter',
							'init'  	=> 'newsletter/plugin.php',
							'name'  	=> 'Newsletter',
						),
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						
					),
				),
			),

			'fashion' => array(
				'demo_name'			=> esc_html__('Fashion','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-fashion/demo-fashion.xml',
				'theme_settings' 	=> $git_url . 'demo-fashion/demo-fashion.dat',
				'widgets_file'  	=> $git_url . 'demo-fashion/demo-fashion.wie',
				'screen'			=> $git_url . 'demo-fashion/demo-fashion.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-seven/',
				'home_title'  		=> 'Home',
				'menus'				=> array(
						'primary_menu' 	=> 'Fashion Menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'top menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						array(
							'slug'  	=> 'newsletter',
							'init'  	=> 'newsletter/plugin.php',
							'name'  	=> 'Newsletter',
						),
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						
					),
				),
			),


			'gaming-dark' => array(
				'demo_name'			=> esc_html__('Game Dark Version','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-game/demo-game.xml',
				'theme_settings' 	=> $git_url . 'demo-game/demo-game.dat',
				'widgets_file'  	=> $git_url . 'demo-game/demo-game.wie',
				'screen'			=> $git_url . 'demo-game/demo-game.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-nine/',
				'home_title'  		=> 'Home',
				'blog_title'  		=> 'Blogs',
				'posts_to_show'  	=> '10',
				'menus'				=> array(
						'primary_menu' 	=> 'primary menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'top menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						
					),
				),
			),


			'gaming-light' => array(
				'demo_name'			=> esc_html__('Game Light Version','access-demo-importer'),
				'xml_file'     		=> $git_url . 'demo-gaming/demo-gaming.xml',
				'theme_settings' 	=> $git_url . 'demo-gaming/demo-gaming.dat',
				'widgets_file'  	=> $git_url . 'demo-gaming/demo-gaming.wie',
				'screen'			=> $git_url . 'demo-gaming/demo-gaming.jpg',
				'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine/demo-ten/',
				'home_title'  		=> 'Home',
				'blog_title'  		=> 'Blogs',
				'posts_to_show'  	=> '10',
				'menus'				=> array(
						'primary_menu' 	=> 'primary menu',
			            'footer_menu' 	=> 'Footer Menu',
			            'top_menu'      =>  'top menu'
					),
				'required_plugins'  => array(
					'free' => array(
						array(
							'slug'  	=> 'siteorigin-panels',
							'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
							'name'  	=> 'SiteOrigin Page Builder',
						),
						
					),
					'premium' => array(
						array(
							'slug' 		=> 'vmagazine-companion',
							'init'  	=> 'vmagazine-companion/vmagazine-companion.php',
							'name' 		=> 'VMagazine Companion',
							'class'		=> 'Vmagazine_Companion',
						),
						
					),
				),
			),


		


			);
	return $data;
}