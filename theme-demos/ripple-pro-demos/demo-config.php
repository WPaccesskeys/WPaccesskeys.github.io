<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','ripple_pro_demo_config');

function ripple_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/ripple-pro-demos/';
			$data = array(

				'demo-one' => array(
					'demo_name'			=> esc_html__('Demo One','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo-one/content.xml',
					'theme_settings' 	=> $git_url . 'demo-one/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'demo-one/widgets.wie',
					'screen'			=> $git_url . 'demo-one/screen.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/ripple-pro/main/',
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
							
						),
						
					),
				),



				'demo-two' => array(
					'demo_name'			=> esc_html__('Demo Two','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo-two/content.xml',
					'theme_settings' 	=> $git_url . 'demo-two/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'demo-two/widgets.wie',
					'screen'			=> $git_url . 'demo-two/screen.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/ripple-pro/demo-2/',
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'is_shop'			=> true,
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'Main Menu',
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
						
					),
				),

			

			);
	return $data;
}