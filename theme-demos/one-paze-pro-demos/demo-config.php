<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function One_Paze_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/one-paze-pro-demos/';
			$data = array(

				'one-paze' => array(
					'demo_name'			=> esc_html__('One Paze','access-demo-importer'),
					'xml_file'     		=> $git_url . 'one-paze/one-paze.xml',
					'theme_settings' 	=> $git_url . 'one-paze/one-paze.dat',
					'widgets_file'  	=> $git_url . 'one-paze/one-paze.wie',
					'screen'			=> $git_url . 'one-paze/one-paze.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/one-paze-pro/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'primary' => 'Main Menu',
											'footer-menu' => 'Footer menu',
											
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
							
						),
					),
				),
				
			);

	return $data;
}