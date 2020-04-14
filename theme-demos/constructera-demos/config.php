<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','constructera_demo_config');

function constructera_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/constructera-demos/';
			$data = array(

				'demo-one' => array(
					'demo_name'			=> esc_html__('Demo One','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo-one/content.xml',
					'theme_settings' 	=> $git_url . 'demo-one/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'demo-one/widgets.wie',
					'screen'			=> $git_url . 'demo-one/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/constructera/demo-one',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'primary menu',
											'footer'	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'constructera-custom-post-types',
								'init'  	=> 'constructera-custom-post-types/constructera-custom-post-types.php',
								'name' 		=> 'Constructera Custom Post Types',
								'class'		=> 'Constructera_Customposts',
							),
							
						),
					),
				),


				'demo-two' => array(
					'demo_name'			=> esc_html__('Demo Two','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo-two/content.xml',
					'theme_settings' 	=> $git_url . 'demo-two/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'demo-two/widgets.wie',
					'screen'			=> $git_url . 'demo-two/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/constructera/demo-two',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'primary menu',
											'footer'	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'constructera-custom-post-types',
								'init'  	=> 'constructera-custom-post-types/constructera-custom-post-types.php',
								'name' 		=> 'Constructera Custom Post Types',
								'class'		=> 'Constructera_Customposts',
							),
							
						),
					),
				),



				'demo-three' => array(
					'demo_name'			=> esc_html__('Demo Three','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo-three/content.xml',
					'theme_settings' 	=> $git_url . 'demo-three/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'demo-three/widgets.wie',
					'screen'			=> $git_url . 'demo-three/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/constructera/demo-three',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'primary menu',
											'footer'	=> 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'constructera-custom-post-types',
								'init'  	=> 'constructera-custom-post-types/constructera-custom-post-types.php',
								'name' 		=> 'Constructera Custom Post Types',
								'class'		=> 'Constructera_Customposts',
							),
							
						),
					),
				),


			



			);
	return $data;
}