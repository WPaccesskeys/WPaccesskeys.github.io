<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function Fotography_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/fotography-pro-demos/';
			$data = array(

				'fotography-demo' => array(
					'demo_name'			=> esc_html__('Fotography Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'fotography-demo/dark.xml',
					'theme_settings' 	=> $git_url . 'fotography-demo/dark.dat',
					'widgets_file'  	=> $git_url . 'fotography-demo/dark.wie',
					'screen'			=> $git_url . 'fotography-demo/dark.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/fotography-pro',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Main Menu'
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'accesspress-twitter-feed',
								'init'  	=> 'accesspress-twitter-feed/accesspress-twitter-feed.php',
								'name' 		=> 'accesspress-twitter-feed'
							),
							array(
								'slug'  	=> 'accesspress-instagram-feed',
								'init'  	=> 'accesspress-instagram-feed/accesspress-instagram-feed.php',
								'name'  	=> 'iFeeds',
							),
						),
						'premium' => array(

						),
					),
				),

			);


	return $data;
}