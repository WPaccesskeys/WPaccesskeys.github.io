<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','vmagazine_lite_demo_config');

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/zigcy-baby-demos/';
$data = array(
	'baby-demo' => array(
		'demo_name'			=> ('Baby Demo'),
		'xml_file'     		=> $git_url . 'baby-demo/content.xml',
		'theme_settings' 	=> $git_url . 'baby-demo/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'baby-demo/widgets.wie',
		'screen'			=> $git_url . 'baby-demo/screen.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy-baby/',
		'home_title'  		=> 'Home',
		'blog_title'  		=> 'Blog',
		'menus'				=> array(
								'menu-1' => 'Menu 1',
								),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
				),
				array(
					'slug'  	=> 'yith-woocommerce-compare',
					'init'  	=> 'yith-woocommerce-compare/init.php',
					'name'  	=> 'YITH WooCommerce Compare',
				),
				array(
					'slug'  	=> 'yith-woocommerce-wishlist',
					'init'  	=> 'yith-woocommerce-wishlist/init.php',
					'name'  	=> 'YITH WooCommerce Wishlist',
				),
				array(
					'slug'  	=> 'yith-woocommerce-quick-view',
					'init'  	=> 'yith-woocommerce-quick-view/init.php',
					'name'  	=> 'YITH WooCommerce Quick View',
				),
				array(
					'slug'  	=> 'mailchimp-for-wp',
					'init'  	=> 'mailchimp-for-wp/mailchimp-for-wp.php',
					'name'  	=> 'MC4WP: Mailchimp for WordPress',
				),
			),
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/Accesskeys/config.json) and find config.json downloaded there.</h2>";