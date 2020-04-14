<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function doko_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/doko-demos/';
			$data = array(

				'doko' => array(
					'demo_name'			=> esc_html__('Doko Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'doko/doko.xml',
					'theme_settings' 	=> $git_url . 'doko/doko.dat',
					'widgets_file'  	=> $git_url . 'doko/doko.wie',
					'screen'			=> $git_url . 'doko/doko.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/doko/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog Lists',
					'menus'				=> array(
											'primary' => 'header-nav',
											'buttom' => 'footer-nav',
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