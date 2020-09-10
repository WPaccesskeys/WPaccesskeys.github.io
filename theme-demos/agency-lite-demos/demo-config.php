<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

// function agency_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/agency-lite-demos/';
			$data = array(

				'agency-corporate' => array(
					'demo_name'			=> ('Agency Corporate Demo'),
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
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'Page Builder by SiteOrigin',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							)
						),
						'premium' => array(

						),
					),
				),

			);


	echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/Accesskeys/config.json) and find config.json downloaded there.</h2>";