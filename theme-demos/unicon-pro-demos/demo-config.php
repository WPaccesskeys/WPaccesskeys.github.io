<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function unicon_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/unicon-pro-demos/';
			$data = array(

				'unicon-lite' => array(
					'demo_name'			=> esc_html__('Unicon Lite','access-demo-importer'),
					'xml_file'     		=> $git_url . 'unicon-lite/unicon-lite.xml',
					'theme_settings' 	=> $git_url . 'unicon-lite/unicon-lite.dat',
					'widgets_file'  	=> $git_url . 'unicon-lite/unicon-lite.wie',
					'screen'			=> $git_url . 'unicon-lite/unicon-lite.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/unicon-pro/unicon-lite/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blogs',
					'menus'				=> array(
											'primary' => 'MainMenu',
											'buttom' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
							array(
								'slug' 		=> 'unicon-companion',
								'init'  	=> 'unicon-companion/unicon-companion.php',
								'name' 		=> 'Unicon Companion',
								'class'		=> 'Unicon_Companion',
							),
						),
					),
				),

				'slanted-demo' => array(
					'demo_name'			=> esc_html__('Slanted Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'slanted-demo/slanted-demo.xml',
					'theme_settings' 	=> $git_url . 'slanted-demo/slanted-demo.dat',
					'widgets_file'  	=> $git_url . 'slanted-demo/slanted-demo.wie',
					'screen'			=> $git_url . 'slanted-demo/slanted-demo.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/unicon-pro/slanted-demo/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' => 'Primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
							array(
								'slug' 		=> 'unicon-companion',
								'init'  	=> 'unicon-companion/unicon-companion.php',
								'name' 		=> 'Unicon Companion',
								'class'		=> 'Unicon_Companion',
							),
						),
					),
				),

				'classic-demo' => array(
					'demo_name'			=> esc_html__('Classic Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'classic-demo/classic-demo.xml',
					'theme_settings' 	=> $git_url . 'classic-demo/classic-demo.dat',
					'widgets_file'  	=> $git_url . 'classic-demo/classic-demo.wie',
					'screen'			=> $git_url . 'classic-demo/classic-demo.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/unicon-pro/classic-demo',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' => 'Primary menu',
											'buttom' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
							array(
								'slug' 		=> 'unicon-companion',
								'init'  	=> 'unicon-companion/unicon-companion.php',
								'name' 		=> 'Unicon Companion',
								'class'		=> 'Unicon_Companion',
							),
						),
					),
				),

			);

	return $data;
}