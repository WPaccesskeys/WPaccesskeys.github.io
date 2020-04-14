<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function Gaga_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/gaga-pro-demos/';
			$data = array(

				'gaga-demo' => array(
					'demo_name'			=> esc_html__('Gaga Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'gaga-demo/gaga.xml',
					'theme_settings' 	=> $git_url . 'gaga-demo/gaga.dat',
					'widgets_file'  	=> $git_url . 'gaga-demo/gaga.wie',
					'screen'			=> $git_url . 'gaga-demo/gaga.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/gaga-pro/',
					'is_shop'			=> true,
					// 'home_title'  		=> 'Home Page',
					// 'blog_title'  		=> 'Blogs',
					'menus'				=> array(
											'primary' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							
						array(
							'slug' 		=> 'contact-form-7',
							'init'  	=> 'contact-form-7/wp-contact-form-7.php',
							'name' 		=> 'contact-form-7'
						),

						array(
							'slug' 		=> 'woocommerce',
							'init'  	=> 'woocommerce/woocommerce.php',
							'name' 		=> 'woocommerce'
						),

						array(
							'slug' 		=> 'accesspress-twitter-feed',
							'init'  	=> 'accesspress-twitter-feed/accesspress-twitter-feed.php',
							'name' 		=> 'accesspress-twitter-feed'
						),

						),
						'premium' => array(
						),
					),
				),

			);

	return $data;
}