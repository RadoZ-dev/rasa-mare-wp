<?php


function university_fales(){
	wp_enqueue_script('javascript',get_theme_file_uri('/js/scripts-bundled.js'),NULL,microtime(),true);
	wp_enqueue_style('custom_font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('university_main_style',get_stylesheet_uri(),null,microtime());
}
add_action('wp_enqueue_scripts','university_fales');



?>