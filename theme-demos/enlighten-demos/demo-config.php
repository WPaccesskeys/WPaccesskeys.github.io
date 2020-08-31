<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','parallaxsome_pro_demo_config');

//function enlighten_demo_config(){
	
		$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/enlighten-demos/';
		$data = array(

			'enlighten' => array(
				'demo_name'			=> 'Enlighten Demo',
				'xml_file'     		=> $git_url . 'enlighten/enlighten.xml',
				'theme_settings' 	=> $git_url . 'enlighten/enlighten.dat',
				'widgets_file'  	=> $git_url . 'enlighten/enlighten.wie',
				'screen'			=> $git_url . 'enlighten/enlighten.png',
				'preview_url'		=> 'https://demo.accesspressthemes.com/enlighten/',
				'home_title'  		=> 'Home',
				'blog_title'  		=> 'Blog',
				'menus'				=> array(
										'primary' => 'menu 1',
										),
				'required_plugins'  => array(
					'free' => array(
						array(
<<<<<<< HEAD
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
=======
							
						),
>>>>>>> c6f822f98054b0976959c2ba6938166ead9d4c22
					),
					'premium' => array(
					),
				),
			),

		);

	/*return $data;
}*/

echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);