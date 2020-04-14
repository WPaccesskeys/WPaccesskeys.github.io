<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function parallaxsome_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/parallaxsome-pro-demos/';
			$data = array(

				'corporation' => array(
					'demo_name'			=> esc_html__('Corporate Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'corporation/corporation.xml',
					'theme_settings' 	=> $git_url . 'corporation/corporation.dat',
					'widgets_file'  	=> $git_url . 'corporation/corporation.wie',
					'screen'			=> $git_url . 'corporation/corporation.png',
					'rev_slider' 		=> $git_url . 'corporation/corporation.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/parallaxsome-pro/parallaxsome-pro-corporate/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'parallaxsome_primary_menu' => 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
						),
						'premium' => array(
							array(
								'slug' 		=> 'parallaxsome-custom-post-type',
								'init'  	=> 'parallaxsome-custom-post-type/parallaxsome-custom-post-type.php',
								'name' 		=> 'Parallaxsome Custom Post Types',
								'class'		=> 'Parallaxsome_custom_Posttype',
							),

						),
					),
				),

				'restaurant' => array(
					'demo_name'			=> esc_html__('Restaurant Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'restaurant/restaurant.xml',
					'theme_settings' 	=> $git_url . 'restaurant/restaurant.dat',
					'widgets_file'  	=> $git_url . 'restaurant/restaurant.wie',
					'screen'			=> $git_url . 'restaurant/restaurant.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/parallaxsome-pro/parallaxsome-pro-restaurant/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'parallaxsome_primary_menu' => 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
						),
						'premium' => array(
							array(
								'slug' 		=> 'parallaxsome-custom-post-type',
								'init'  	=> 'parallaxsome-custom-post-type/parallaxsome-custom-post-type.php',
								'name' 		=> 'Parallaxsome Custom Post Types',
								'class'		=> 'Parallaxsome_custom_Posttype',
							),
						),
					),
				),

				'classic' => array(
					'demo_name'			=> esc_html__('Classic Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'classic/classic.xml',
					'theme_settings' 	=> $git_url . 'classic/classic.dat',
					'widgets_file'  	=> $git_url . 'classic/classic.wie',
					'screen'			=> $git_url . 'classic/classic.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/parallaxsome-pro/parallaxsome-lite/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'parallaxsome_primary_menu' => 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
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
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'parallaxsome-custom-post-type',
								'init'  	=> 'parallaxsome-custom-post-type/parallaxsome-custom-post-type.php',
								'name' 		=> 'Parallaxsome Custom Post Types',
								'class'		=> 'Parallaxsome_custom_Posttype',
							),
						),
					),
				),

			);


	return $data;
}