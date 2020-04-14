<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','construction_pro_demo_config');

function construction_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/construction-pro-demos/';
			$data = array(

				'demo-one' => array(
					'demo_name'			=> esc_html__('Demo One','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo-one/content.xml',
					'theme_settings' 	=> $git_url . 'demo-one/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'demo-one/widgets.wie',
					'screen'			=> $git_url . 'demo-one/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/construction-pro/demo-one',
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
								'slug' 		=> 'construction-pro-custom-post-types',
								'init'  	=> 'construction-pro-custom-post-types/construction-pro-custom-post-types.php',
								'name' 		=> 'Construction Custom Post Types',
								'class'		=> 'construction_pro_Customposts',
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
					'preview_url'		=> 'https://demo.accesspressthemes.com/construction-pro/demo-two',
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
								'slug' 		=> 'construction-pro-custom-post-types',
								'init'  	=> 'construction-pro-custom-post-types/construction-pro-custom-post-types.php',
								'name' 		=> 'Construction Custom Post Types',
								'class'		=> 'construction_pro_Customposts',
							),
							
						),
					),
				),

				'creative' => array(
					'demo_name'			=> esc_html__('Creative','access-demo-importer'),
					'xml_file'     		=> $git_url . 'creative/content.xml',
					'theme_settings' 	=> $git_url . 'creative/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'creative/widgets.wie',
					'screen'			=> $git_url . 'creative/screen.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/construction-pro/creative/',
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
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'construction-pro-custom-post-types',
								'init'  	=> 'construction-pro-custom-post-types/construction-pro-custom-post-types.php',
								'name' 		=> 'Construction Custom Post Types',
								'class'		=> 'construction_pro_Customposts',
							),
							
						),
					),
				),



			);
	return $data;
}