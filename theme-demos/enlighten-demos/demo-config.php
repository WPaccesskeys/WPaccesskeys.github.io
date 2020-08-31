<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function enlighten_demo_config(){
	
		$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/enlighten-demos/';
		$data = array(

			'enlighten' => array(
				'demo_name'			=> esc_html__('Enlighten Demo','access-demo-importer'),
				'xml_file'     		=> $git_url . 'enlighten/enlighten.xml',
				'theme_settings' 	=> $git_url . 'enlighten/enlighten.dat',
				'widgets_file'  	=> $git_url . 'enlighten/enlighten.wie',
				'screen'			=> $git_url . 'enlighten/enlighten.png',
				'preview_url'		=> 'https://demo.accesspressthemes.com/enlighten/',
				'is_shop'			=> true,
				'home_title'  		=> 'Home',
				'blog_title'  		=> 'Blog',
				'menus'				=> array(
										'primary' => 'menu 1',
										),
				'required_plugins'  => array(
					'free' => array(
						array(
							
						),
					),
					'premium' => array(

					),
				),
			),

		);

	return $data;
}