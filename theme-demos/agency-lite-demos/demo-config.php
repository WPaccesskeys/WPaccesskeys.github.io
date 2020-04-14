<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function agency_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/agency-lite-demos/';
			$data = array(

				'agency-corporate' => array(
					'demo_name'			=> esc_html__('Agency Corporate Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'agency-corporate/agency-corporate.xml',
					'theme_settings' 	=> $git_url . 'agency-corporate/agency-corporate.dat',
					'widgets_file'  	=> $git_url . 'agency-corporate/agency-corporate.wie',
					'screen'			=> $git_url . 'agency-corporate/agency-corporate.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/agency-lite/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'agency-lite-primary-menu' => 'Menu 1',
											'agency-lite-footer-menu' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(

						),
					),
				),

			);


	return $data;
}