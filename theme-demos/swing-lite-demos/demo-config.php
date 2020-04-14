<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function swing_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/swing-lite-demos/';
			$data = array(

				'swing-hotel' => array(
					'demo_name'			=> esc_html__('Swing Hotel Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'swing-hotel/swing-hotel.xml',
					'theme_settings' 	=> $git_url . 'swing-hotel/swing-hotel.dat',
					'widgets_file'  	=> $git_url . 'swing-hotel/swing-hotel.wie',
					'screen'			=> $git_url . 'swing-hotel/swing-hotel.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy-lite/demo-one/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blogs',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'SiteOrigin',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'so-widgets-bundle',
								'init'  	=> 'so-widgets-bundle/so-widgets-bundle.php',
								'name'  	=> 'SiteOrigin Widgets Bundle',
							),
							array(
								'slug'  	=> 'wp-hotel-booking',
								'init'  	=> 'wp-hotel-booking/wp-hotel-booking.php',
								'name'  	=> 'WP Hotel Booking',
							),
							
						),
						'premium' => array(

						),
					),
				),

			);


	return $data;
}