<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function zigcy_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/the-launcher-demos/';
			$data = array(

				'simple-home' => array(
					'demo_name'			=> ('Simple Home Demo'),
					'xml_file'     		=> $git_url . 'simple-home/simple-home.xml',
					'theme_settings' 	=> $git_url . 'simple-home/simple-home.dat',
					'widgets_file'  	=> $git_url . 'simple-home/simple-home.wie',
					'screen'			=> $git_url . 'simple-home/simple-home.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/the-launcher/simple-home',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'menus'				=> array(
											'primary' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(

						),
					),
				),

				'landing-page' => array(
					'demo_name'			=> ('Landing Page Demo'),
					'xml_file'     		=> $git_url . 'landing-page/landing-page.xml',
					'theme_settings' 	=> $git_url . 'landing-page/landing-page.dat',
					'widgets_file'  	=> $git_url . 'landing-page/landing-page.wie',
					'screen'			=> $git_url . 'landing-page/landing-page.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/the-launcher/landing-page/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

				'comming-soon' => array(
					'demo_name'			=> ('Comming Soon Demo'),
					'xml_file'     		=> $git_url . 'comming-soon/comming-soon.xml',
					'theme_settings' 	=> $git_url . 'comming-soon/comming-soon.dat',
					'widgets_file'  	=> $git_url . 'comming-soon/comming-soon.wie',
					'screen'			=> $git_url . 'comming-soon/comming-soon.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/the-launcher/coming-soon/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
							
						),
					),
				),

			);


//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/themes/test/bloger-demos/config.json) and find config.json downloaded there.</h2>";