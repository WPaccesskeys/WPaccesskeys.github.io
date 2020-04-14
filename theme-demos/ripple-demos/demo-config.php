<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function ripple_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/ripple-demos/';
			$data = array(

				'ripple-demo' => array(
					'demo_name'			=> esc_html__('Ripple Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'ripple-demo/ripple.xml',
					'theme_settings' 	=> $git_url . 'ripple-demo/ripple.dat',
					'widgets_file'  	=> $git_url . 'ripple-demo/ripple.wie',
					'screen'			=> $git_url . 'ripple-demo/ripple.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/ripple/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							
						),
						'premium' => array(

						),
					),
				),

			);


	return $data;
}