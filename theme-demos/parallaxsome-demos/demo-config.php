<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function parallaxsome_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/parallaxsome-demos/';
			$data = array(

				'parallaxsome' => array(
					'demo_name'			=> esc_html__('Parallaxsome Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'parallaxsome/parallaxsome.xml',
					'theme_settings' 	=> $git_url . 'parallaxsome/parallaxsome.dat',
					'widgets_file'  	=> $git_url . 'parallaxsome/parallaxsome.wie',
					'screen'			=> $git_url . 'parallaxsome/parallaxsome.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/parallaxsome/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'parallaxsome_primary_menu' => 'Primary Menu',
											'parallaxsome_top_menu' => 'Top Menu',
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