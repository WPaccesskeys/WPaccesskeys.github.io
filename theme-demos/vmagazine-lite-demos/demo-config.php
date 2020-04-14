<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','vmagazine_lite_demo_config');

function vmagazine_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/vmagazine-lite-demos/';

			$data = array(

				'fashion' => array(
					'demo_name'			=> esc_html__('Fashion Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'fashion-demo/content.xml',
					'theme_settings' 	=> $git_url . 'fashion-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'fashion-demo/widgets.wie',
					'screen'			=> $git_url . 'fashion-demo/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine-lite/fashion/',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary_menu' 	=> 'Fashion Menu',
											'top_menu' 		=> 'primary menu',
											'footer_menu' 	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'SiteOrigin Page Builder',
							),
						),
					),
				),

				'gaming' => array(
					'demo_name'			=> esc_html__('Gaming Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'gaming-demo/content.xml',
					'theme_settings' 	=> $git_url . 'gaming-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'gaming-demo/widgets.wie',
					'screen'			=> $git_url . 'gaming-demo/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine-lite/gaming/',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary_menu' 	=> 'primary menu',
											'top_menu' 		=> 'top menu',
											'footer_menu' 	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'SiteOrigin Page Builder',
							),
						),
					),
				),

				'newspaper' => array(
					'demo_name'			=> esc_html__('Newspaper Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'newspaper-demo/content.xml',
					'theme_settings' 	=> $git_url . 'newspaper-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'newspaper-demo/widgets.wie',
					'screen'			=> $git_url . 'newspaper-demo/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine-lite/newspaper/',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary_menu' 	=> 'primary menu',
											'top_menu' 		=> 'Top Menus',
											'footer_menu' 	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'SiteOrigin Page Builder',
							),
						),
					),
				),


				'techmag' => array(
					'demo_name'			=> esc_html__('Tech Mag Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'tech-demo/content.xml',
					'theme_settings' 	=> $git_url . 'tech-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'tech-demo/widgets.wie',
					'screen'			=> $git_url . 'tech-demo/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine-lite/techmag/',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary_menu' 	=> 'primary menu',
											'top_menu' 		=> 'top menu',
											'footer_menu' 	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'SiteOrigin Page Builder',
							),
						),
					),
				),


				'worldmag' => array(
					'demo_name'			=> esc_html__('World Mag Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'world-demo/content.xml',
					'theme_settings' 	=> $git_url . 'world-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'world-demo/widgets.wie',
					'screen'			=> $git_url . 'world-demo/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmagazine-lite/worldmag/',
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary_menu' 	=> 'primary menu',
											'top_menu' 		=> 'Top Menus',
											'footer_menu' 	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'SiteOrigin Page Builder',
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
				),*/


			);
	return $data;
}

$data = vmagazine_lite_demo_config();

echo (json_encode($data));