<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','zigcy_demo_config');

//function zigcy_demo_config(){

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress-store-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'Default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'theme_settings' 	=> $git_url . 'default/customizer.dat',
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-store',
		'is_shop'			=> true,
		'home_title'	=> 'Home',
		'blog_title'  		=> 'Blogs',
		'posts_to_show'  	=> '10',
		'menus' 			=> array(
			'primary' => 'Primary Menu',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'      => 'yith-woocommerce-wishlist',
					'init' 	=> 'yith-woocommerce-wishlist/init.php',
					'name' 	=> 'YITH WooCommerce Wishlist',
				),
				
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
			),
			'premium' => array()
		)
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);
echo "<h2>Check the folder (http://localhost/accesspress/config.json) and find config.json downloaded there.</h2>";
//}
