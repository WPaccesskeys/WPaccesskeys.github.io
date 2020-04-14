<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','zigcy_demo_config');

//function zigcy_demo_config(){

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/fashstore-pro-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'theme_settings' 	=> $git_url . 'default/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'screen'			=> $git_url . 'default/default.jpg',
		'preview_url'		=> 'https://demo.accesspressthemes.com/fashstorepro/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Main Menu',
			'top' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'woocommerce-grid-list-toggle',
					'init' 	=> 'woocommerce-grid-list-toggle/woocommerce-grid-list-toggle.php',
					'name' 	=> 'WooCommerce Grid / List toggle',
				),
				array(
					'slug'  => 'yith-woocommerce-wishlist',
					'init' 	=> 'yith-woocommerce-wishlist/init.php',
					'name' 	=> 'YITH WooCommerce Wishlist'
				),
				array(
					'slug' => 'yith-woocommerce-quick-view',
					'init' => 'yith-woocommerce-quick-view/init.php',
					'name' => 'YITH WooCommerce Quick View',
				),
				array(
					'slug' => 'email-subscribers',
					'init' => 'email-subscribers/email-subscribers.php',
					'name' => 'Email Subscribers',
				)  
			),
			'premium' => array(
				array(
					'slug' 		=> 'revslider',
					'init'  	=> 'revslider/revslider.php',
					'name' 		=> 'Slider Revolution',
					'class'		=> 'RevSlider',
				)
			)
		)
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/8degree/config.json) and find config.json downloaded there.</h2>";
