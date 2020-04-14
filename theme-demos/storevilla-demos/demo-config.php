<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function zigcy_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/storevilla-demos/';
			$data = array(

				'storevilla' => array(
					'demo_name'			=> ('Storevilla Demo'),
					'xml_file'     		=> $git_url . 'storevilla/storevilla.xml',
					'theme_settings' 	=> $git_url . 'storevilla/storevilla.dat',
					'widgets_file'  	=> $git_url . 'storevilla/storevilla.wie',
					'screen'			=> $git_url . 'storevilla/storevilla.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/storevilla/',
					'is_shop'			=> true,
					'home_title'  		=> 'Front Page',
					'menus'				=> array(
											'storevillaprimary' => 'Main Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
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