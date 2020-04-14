<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','bloger_pro_demo_config');

function bloger_pro_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/bloger-pro-demos/';
			$data = array(

				'demo-one' => array(
					'demo_name'			=> esc_html__('Default Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'default-demo/content.xml',
					'theme_settings' 	=> $git_url . 'default-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'default-demo/widgets.wie',
					'screen'			=> $git_url . 'default-demo/screen.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/bloger-pro/main',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'Primary Menu',
											'side'	=> 'Side Menu',
											'top'	=> 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'accesspress-pinterest',
								'init' 		=> 'accesspress-pinterest/accesspress-pinterest.php',
								'class' 	=> 'APSP_Class_free',
								'name'		=> 'AccessPress Pinterest'
							),
							
						),
						
					),
				),


				'grid-demo' => array(
					'demo_name'			=> esc_html__('Grid Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'grid-demo/content.xml',
					'theme_settings' 	=> $git_url . 'grid-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'grid-demo/widgets.wie',
					'screen'			=> $git_url . 'grid-demo/screen.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/bloger-pro/grid',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'Primary Menu',
											'side'	=> 'Side Menu',
											'top'	=> 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'accesspress-pinterest',
								'init' 		=> 'accesspress-pinterest/accesspress-pinterest.php',
								'class' 	=> 'APSP_Class_free',
								'name'		=> 'AccessPress Pinterest'
							),
							
						),
						
					),
				),

				'list-demo' => array(
					'demo_name'			=> esc_html__('List Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'list-demo/content.xml',
					'theme_settings' 	=> $git_url . 'list-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'list-demo/widgets.wie',
					'screen'			=> $git_url . 'list-demo/screen.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/bloger-pro/list',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'Primary Menu',
											'side'	=> 'Side Menu',
											'top'	=> 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'accesspress-pinterest',
								'init' 		=> 'accesspress-pinterest/accesspress-pinterest.php',
								'class' 	=> 'APSP_Class_free',
								'name'		=> 'AccessPress Pinterest'
							),
							
						),
						
					),
				),

				'masonry-demo' => array(
					'demo_name'			=> esc_html__('Masonry Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'masonry-demo/content.xml',
					'theme_settings' 	=> $git_url . 'masonry-demo/customizer_options.dat',
					'widgets_file'  	=> $git_url . 'masonry-demo/widgets.wie',
					'screen'			=> $git_url . 'masonry-demo/screen.png',
					'preview_url'		=> 'https://demo.accesspressthemes.com/bloger-pro/masonry',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'primary' 	=> 'Primary Menu',
											'side'	=> 'Side Menu',
											'top'	=> 'Top Menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug' 		=> 'accesspress-pinterest',
								'init' 		=> 'accesspress-pinterest/accesspress-pinterest.php',
								'class' 	=> 'APSP_Class_free',
								'name'		=> 'AccessPress Pinterest'
							),
							
						),
						
					),
				),

			



			);
	return $data;
}