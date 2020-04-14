<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function Agensy_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/agensy-pro-demos/';
			$data = array(

				'demo-one' => array(
					'demo_name'			=> 'Demo One',
					'xml_file'     		=> $git_url . 'demo-one/demo-one.xml',
					'theme_settings' 	=> $git_url . 'demo-one/demo-one.dat',
					'widgets_file'  	=> $git_url . 'demo-one/demo-one.wie',
					'screen'			=> $git_url . 'demo-one/demo-one.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/agency-pro/demo-one/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'menu-1' => 'Main Menu',
											'menu-2' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'siteorigin-panels',
							),

							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
							array(
								'slug' 		=> 'agensy-custom-post-types',
								'init'  	=> 'agensy-custom-post-types/agensy-custom-post-types.php',
								'name' 		=> 'Agensy Custom Post Types',
								'class'		=> 'Agensy_Customposts',
							),
						),
					),
				),


				'demo-two' => array(
					'demo_name'			=> 'Demo Two',
					'xml_file'     		=> $git_url . 'demo-two/demo-two.xml',
					'theme_settings' 	=> $git_url . 'demo-two/demo-two.dat',
					'widgets_file'  	=> $git_url . 'demo-two/demo-two.wie',
					'screen'			=> $git_url . 'demo-two/demo-two.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/agency-pro/demo-two/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'Main Menu',
											'menu-2' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'siteorigin-panels',
							),
							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
							array(
								'slug' 		=> 'agensy-custom-post-types',
								'init'  	=> 'agensy-custom-post-types/agensy-custom-post-types.php',
								'name' 		=> 'Agensy Custom Post Types',
								'class'		=> 'Agensy_Customposts',
							),
						),
					),
				),

				'demo-three' => array(
					'demo_name'			=> 'Demo Three',
					'xml_file'     		=> $git_url . 'demo-three/demo-three.xml',
					'theme_settings' 	=> $git_url . 'demo-three/demo-three.dat',
					'widgets_file'  	=> $git_url . 'demo-three/demo-three.wie',
					'screen'			=> $git_url . 'demo-three/demo-three.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/agency-pro/demo-three/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'Menu 1',
											'menu-2' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'siteorigin-panels',
								'init'  	=> 'siteorigin-panels/siteorigin-panels.php',
								'name'  	=> 'siteorigin-panels',
							),
							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
							array(
								'slug' 		=> 'agensy-custom-post-types',
								'init'  	=> 'agensy-custom-post-types/agensy-custom-post-types.php',
								'name' 		=> 'Agensy Custom Post Types',
								'class'		=> 'Agensy_Customposts',
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

echo "<h2>Check the folder (<br/>".$_SERVER['HTTP_REFERER']."<br/>) and find config.json downloaded there.</h2>";
