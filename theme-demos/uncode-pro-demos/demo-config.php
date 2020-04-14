<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function Uncode_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/uncode-pro-demos/';
			$data = array(

				'uncode' => array(
					'demo_name'			=> esc_html__('Uncode','access-demo-importer'),
					'xml_file'     		=> $git_url . 'uncode/uncode.xml',
					'theme_settings' 	=> $git_url . 'uncode/uncode.dat',
					'widgets_file'  	=> $git_url . 'uncode/uncode.wie',
					'screen'			=> $git_url . 'uncode/uncode.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/uncode-pro/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'primary' => 'Main Menu',
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
						),
						'premium' => array(
							
						),
					),
				),

				
			);


	return $data;
}