<?php 
/**
* Demo import configuration file
*
*
*/


$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress-store-pro-demos/';
$data = array(
	'tech' => array(
		'demo_name' => 'tech',
		'xml_file'     		=> $git_url . 'tech/content.xml',
		'theme_settings' 	=> $git_url . 'tech/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'tech/widgets.wie',
		'screen'			=> $git_url . 'tech/tech.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-storepro/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'primary menu',
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
					'slug' 		=> 'accesspress-menu',
					'init'  	=> 'accesspress-menu/accesspress-menu.php',
					'name' 		=> 'AccessPress Mega Menu',
					'class'		=> 'accesspressmenu_class',
				),
				array(
					'slug' 		=> 'revslider',
					'init'  	=> 'revslider/revslider.php',
					'name' 		=> 'Slider Revolution',
					'class'		=> 'RevSlider',
				)
			)
		)
	),
	'fashion' => array(
		'demo_name' => 'fashion',
		'xml_file'     		=> $git_url . 'fashion/content.xml',
		'theme_settings' 	=> $git_url . 'fashion/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'fashion/widgets.wie',
		'screen'			=> $git_url . 'fashion/fashion.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-storepro/fashion/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Mega Menu',
			'top' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  	=> 'woocommerce',
					'init'  	=> 'woocommerce/woocommerce.php',
					'name'  	=> 'WooCommerce',
					'class'  	=> 'WooCommerce',
				),
				array(
					'slug'  => 'woocommerce-grid-list-toggle',
					'init' 	=> 'woocommerce-grid-list-toggle/woocommerce-grid-list-toggle.php',
					'name' 	=> 'WooCommerce Grid / List toggle',
					'class' => 'WC_List_Grid',
				),
				array(
					'slug'  => 'yith-woocommerce-wishlist',
					'init' 	=> 'yith-woocommerce-wishlist/init.php',
					'name' 	=> 'YITH WooCommerce Wishlist',
					'class'  	=> 'YITH_WCWL',
				),
				array(
					'slug' => 'yith-woocommerce-quick-view',
					'init' => 'yith-woocommerce-quick-view/init.php',
					'name' => 'YITH WooCommerce Quick View',
					'class'  	=> 'YITH_WCQV',
				),
				array(
					'slug' => 'email-subscribers',
					'init' => 'email-subscribers/email-subscribers.php',
					'name' => 'Email Subscribers',
					'class'  	=> 'Email_Subscribers',
				)  
			),
			'premium' => array(
				array(
					'slug' 		=> 'accesspress-menu',
					'init'  	=> 'accesspress-menu/accesspress-menu.php',
					'name' 		=> 'AccessPress Mega Menu',
					'class'		=> 'accesspressmenu_class',
				),
				array(
					'slug' 		=> 'revslider',
					'init'  	=> 'revslider/revslider.php',
					'name' 		=> 'Slider Revolution',
					'class'		=> 'RevSlider',
				)
			)
		)
	),
	'furniture' => array(
		'demo_name' => 'furniture',
		'xml_file'     		=> $git_url . 'furniture/content.xml',
		'theme_settings' 	=> $git_url . 'furniture/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'furniture/widgets.wie',
		'screen'			=> $git_url . 'furniture/furniture.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-storepro/furniture/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Mega Menu',
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
					'slug' 		=> 'accesspress-menu',
					'init'  	=> 'accesspress-menu/accesspress-menu.php',
					'name' 		=> 'AccessPress Mega Menu',
					'class'		=> 'accesspressmenu_class',
				),
				array(
					'slug' 		=> 'revslider',
					'init'  	=> 'revslider/revslider.php',
					'name' 		=> 'Slider Revolution',
					'class'		=> 'RevSlider',
				)
			)
		)
	),
	'jewellery' => array(
		'demo_name' => 'jewellery',
		'xml_file'     		=> $git_url . 'jewellery/content.xml',
		'theme_settings' 	=> $git_url . 'jewellery/customizer_options.dat',
		'widgets_file'  	=> $git_url . 'jewellery/widgets.wie',
		'screen'			=> $git_url . 'jewellery/jewellery.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-storepro/jewellery/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'menus' 			=> array(
			'primary' => 'Mega Menu',
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
					'slug' 		=> 'accesspress-menu',
					'init'  	=> 'accesspress-menu/accesspress-menu.php',
					'name' 		=> 'AccessPress Mega Menu',
					'class'		=> 'accesspressmenu_class',
				),
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
