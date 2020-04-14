<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function zigcy_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/revolve-demos/';
			$data = array(

				'revolve' => array(
					'demo_name'			=> ('Revolve Demo'),
					'xml_file'     		=> $git_url . 'revolve/revolve.xml',
					'theme_settings' 	=> $git_url . 'revolve/revolve.dat',
					'widgets_file'  	=> $git_url . 'revolve/revolve.wie',
					'screen'			=> $git_url . 'revolve/revolve.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/revolve/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Our Blogs',
					'menus'				=> array(
											'primary' => 'Main Menu',
											),
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