<?php 
/**
* Demo import configuration file
*
*
*/

$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/WPaccesskeys.github.io/master/theme-demos/accesspress-basic-pro-demos/';
$data = array(
	'default' => array(
		'demo_name' => 'default',
		'xml_file'     		=> $git_url . 'default/content.xml',
		'widgets_file'  	=> $git_url . 'default/widgets.wie',
		'import_redux'		=> array(
			'file_url'		=> $git_url .'default/themeoptions.json',
			'option_name' 	=> 'apbasic_options',
		),
		'screen'			=> $git_url . 'default/default.png',
		'preview_url'		=> 'https://demo.accesspressthemes.com/accesspress-basic-pro/',
		'is_shop'			=> true,
		'home_title'  		=> 'Home',
		'blog_title'  		=> 'Blogs',
		'menus' 			=> array(
			'primary' => 'Main Menu',
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'  => 'contact-form-7',
					'init' 	=> 'contact-form-7/wp-contact-form-7.php',
					'name' 	=> 'Contact Form 7',
				),
				array(
					'slug'      => 'newsletter',
					'init'  	=> 'newsletter/plugin.php',
					'name'      => 'Newsletter',
				)
			),
			'premium' => array()
		)
	)
);
	//return $data;
echo (json_encode($data));

$fp = fopen('config.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);

echo "<h2>Check the folder (http://localhost/8degree/config.json) and find config.json downloaded there.</h2>";

/*
<?php
$settings = get_option( 'apbasic_options' );
$encoded = json_encode($settings);
echo '<pre>';
   print_r($encoded);
echo '</pre>';
?>
*/