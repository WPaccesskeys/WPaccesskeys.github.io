<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

function Vmag_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/vmag-pro-demos/';
			$data = array(

				'default-demo' => array(
					'demo_name'			=> esc_html__('Default Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'default-demo/default.xml',
					'theme_settings' 	=> $git_url . 'default-demo/default.dat',
					'widgets_file'  	=> $git_url . 'default-demo/default.wie',
					'screen'			=> $git_url . 'default-demo/default.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmag-pro/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home Page',
					'blog_title'  		=> 'Blogs',
					'menus'				=> array(
											'primary_menu' => 'Primary Menu',
											'top_menu' => 'Top Menu',
											'footer_menu' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

				'fashion-demo' => array(
					'demo_name'			=> esc_html__('Fashion Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'fashion-demo/fashion.xml',
					'theme_settings' 	=> $git_url . 'fashion-demo/fashion.dat',
					'widgets_file'  	=> $git_url . 'fashion-demo/fashion.wie',
					'screen'			=> $git_url . 'fashion-demo/fashion.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmag-pro/fashion/',
					'is_shop'			=> true,
					'home_title'  		=> 'Homepage',
					'blog_title'  		=> 'Latest Post',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary_menu' => 'Primary Menu',
											'top_menu' => 'Top Menu',
											'footer_menu' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

				'sports-demo' => array(
					'demo_name'			=> esc_html__('Sports Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'sports-demo/sports.xml',
					'theme_settings' 	=> $git_url . 'sports-demo/sports.dat',
					'widgets_file'  	=> $git_url . 'sports-demo/sports.wie',
					'screen'			=> $git_url . 'sports-demo/sports.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmag-pro/sports/',
					'is_shop'			=> true,
					'home_title'  		=> 'Homepage',
					'blog_title'  		=> 'Blogs',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary_menu' => 'Primary Menu',
											'top_menu' => 'Top Menu',
											'footer_menu' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

				'news-demo' => array(
					'demo_name'			=> esc_html__('News Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'news-demo/news.xml',
					'theme_settings' 	=> $git_url . 'news-demo/news.dat',
					'widgets_file'  	=> $git_url . 'news-demo/news.wie',
					'screen'			=> $git_url . 'news-demo/news.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/vmag-pro/news/',
					'is_shop'			=> true,
					'home_title'  		=> 'Home Page',
					'blog_title'  		=> 'Blogs',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary_menu' => 'Primary Menu',
											'top_menu' => 'Top Menu',
											'footer_menu' => 'Footer Menu',
											),
					'required_plugins'  => array(
						'free' => array(
						),
						'premium' => array(
						),
					),
				),

			);

	return $data;
}