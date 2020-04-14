<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function Doko_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/doko-pro-demos/';
			$data = array(

				'demo1' => array(
					'demo_name'			=> esc_html__('Demo One','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo1/demo1.xml',
					'theme_settings' 	=> $git_url . 'demo1/demo1.dat',
					'widgets_file'  	=> $git_url . 'demo1/demo1.wie',
					'screen'			=> $git_url . 'demo1/demo1.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/doko-pro/demo1/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'menus'				=> array(
											'primary' => 'header-nav',
											'buttom'  => 'footer-nav',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
						),
					),
				),


				'demo2' => array(
					'demo_name'			=> esc_html__('Demo Two','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo2/demo2.xml',
					'theme_settings' 	=> $git_url . 'demo2/demo2.dat',
					'widgets_file'  	=> $git_url . 'demo2/demo2.wie',
					'screen'			=> $git_url . 'demo2/demo2.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/doko-pro/demo2/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' => 'header-nav',
											'buttom'  => 'footer-nav',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
						),
					),
				),

				'demo3' => array(
					'demo_name'			=> esc_html__('Demo Three','access-demo-importer'),
					'xml_file'     		=> $git_url . 'demo3/demo3.xml',
					'theme_settings' 	=> $git_url . 'demo3/demo3.dat',
					'widgets_file'  	=> $git_url . 'demo3/demo3.wie',
					'screen'			=> $git_url . 'demo3/demo3.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/doko-pro/demo3',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' => 'header-nav',
											'buttom'  => 'footer-nav',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name' 		=> 'contact-form-7'
							),
						),
						'premium' => array(
						),
					),
				),

			);

	return $data;
}