<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function zigcy_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/scrollme-demos/';
			$data = array(

				'scrollme' => array(
					'demo_name'			=> ('Scrollme Demo'),
					'xml_file'     		=> $git_url . 'scrollme/scrollme.xml',
					'theme_settings' 	=> $git_url . 'scrollme/scrollme.dat',
					'widgets_file'  	=> $git_url . 'scrollme/scrollme.wie',
					'screen'			=> $git_url . 'scrollme/scrollme.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/scroll-me/',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'Page Builder by SiteOrigin',
							),
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