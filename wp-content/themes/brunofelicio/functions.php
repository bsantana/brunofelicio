<?php

add_action('wp_enqueue_scripts', function(){
	wp_enqueue_script( 'jquery.jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery.theme', get_template_directory_uri() . '/js/jquery.theme.js', array('jquery', 'jquery.jcarousel'), '1.0.0', true );
});

register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'top_nav' => 'Custom Top Navigation'
) );

add_theme_support( 'post-thumbnails' );
add_image_size( 600, 300 );

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 300, 150 );
}