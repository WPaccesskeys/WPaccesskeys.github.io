<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','vmagazine_lite_demo_config');

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/zigcy-cosmetics-demos/';
$data = array(
	'cosmetics-demo' => array(
		'demo_name'			=> ('Cosmetics Demo'),
		'xml_file'     		=> $git_url . 'cosmetics-demo/content.xml',
		'theme_settings' 	=> $git_url . 'cosmetics-demo/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'cosmetics-demo/widgets.wie',
		'screen'			=> $git_url . 'cosmetics-demo/screen.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy-cosmetics/',
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
					'slug'  	=> 'smart-slider-3',
					'init'  	=> 'smart-slider-3/smart-slider-3.php',
					'name'  	=> 'Smart Slider 3',
				),
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
		),
	),
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/Accesskeys/config.json) and find config.json downloaded there.</h2>";