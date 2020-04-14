<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function zigcy_lite_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/zigcy-lite-demos/';
			$data = array(

				'fashion' => array(
					'demo_name'			=> ('Fashion Demo'),
					'xml_file'     		=> $git_url . 'fashion/fashion.xml',
					'theme_settings' 	=> $git_url . 'fashion/fashion.dat',
					'widgets_file'  	=> $git_url . 'fashion/fashion.wie',
					'screen'			=> $git_url . 'fashion/fashion.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy-lite/demo-one/',
					'is_shop'			=> true,
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
						),
						'premium' => array(

						),
					),
				),

				'furniture' => array(
					'demo_name'			=> ('Furniture Demo'),
					'xml_file'     		=> $git_url . 'furniture/furniture.xml',
					'theme_settings' 	=> $git_url . 'furniture/furniture.dat',
					'widgets_file'  	=> $git_url . 'furniture/furniture.wie',
					'screen'			=> $git_url . 'furniture/furniture.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy-lite/demo-two/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
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
							
						),
						'premium' => array(
						),
					),
				),

				'electronics' => array(
					'demo_name'			=> ('Electronics Demo'),
					'xml_file'     		=> $git_url . 'electronics/electronics.xml',
					'theme_settings' 	=> $git_url . 'electronics/electronics.dat',
					'widgets_file'  	=> $git_url . 'electronics/electronics.wie',
					'screen'			=> $git_url . 'electronics/electronics.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy-lite/demo-three',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
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