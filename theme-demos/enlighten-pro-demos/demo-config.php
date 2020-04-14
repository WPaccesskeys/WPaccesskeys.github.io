<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function Enlighten_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/enlighten-pro-demos/';
			$data = array(

				'classical-version-demo' => array(
					'demo_name'			=> esc_html__('Classical Version Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'classical-version-demo/classical-version-demo.xml',
					'theme_settings' 	=> $git_url . 'classical-version-demo/classical-version-demo.dat',
					'widgets_file'  	=> $git_url . 'classical-version-demo/classical-version-demo.wie',
					'screen'			=> $git_url . 'classical-version-demo/classical-version-demo.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/enlighten-pro/classical-version-demo/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'primary menu'
											),
					'required_plugins'  => array(
						'free' => array(
							
						),
						'premium' => array(

						),
					),
				),


				'event-version-demo' => array(
					'demo_name'			=> esc_html__('Event Version Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'event-version-demo/event-version-demo.xml',
					'theme_settings' 	=> $git_url . 'event-version-demo/event-version-demo.dat',
					'widgets_file'  	=> $git_url . 'event-version-demo/event-version-demo.wie',
					'screen'			=> $git_url . 'event-version-demo/event-version-demo.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/enlighten-pro/event-version-demo/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'primary menu'
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

				'light-version-demo' => array(
					'demo_name'			=> esc_html__('Light Version Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'light-version-demo/light-version-demo.xml',
					'theme_settings' 	=> $git_url . 'light-version-demo/light-version-demo.dat',
					'widgets_file'  	=> $git_url . 'light-version-demo/light-version-demo.wie',
					'screen'			=> $git_url . 'light-version-demo/light-version-demo.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/agency-pro/demo-three/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'primary menu'
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

				'modern-version-demo' => array(
					'demo_name'			=> esc_html__('Modern Version Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'modern-version-demo/modern-version-demo.xml',
					'theme_settings' 	=> $git_url . 'modern-version-demo/modern-version-demo.dat',
					'widgets_file'  	=> $git_url . 'modern-version-demo/modern-version-demo.wie',
					'screen'			=> $git_url . 'modern-version-demo/modern-version-demo.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/enlighten-pro/modern-version-demo/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'primary menu'
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