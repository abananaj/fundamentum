<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// function remove_script_version($src) {
//     return remove_query_arg('ver', $src);
//     }
//     add_filter('script_loader_src', 'remove_script_version', 15, 1);
//     add_filter('style_loader_src', 'remove_script_version', 15, 1);

// add bootstrap
function add_fundamentum_scripts_styles() {
// wp_register_style('adobe-fonts', 'https://use.typekit.net/bmw4zvq.css');
wp_register_style('fundamentum-style', get_stylesheet_directory_uri() . '/assets/dist/css/index.css');
 //empty array()for dependencies, version 0.1, place this in footer not head
wp_register_script('fundamentum-script', get_stylesheet_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js', array(), '', true);
// enqueue styles & scripts
wp_enqueue_style('fundamentum-style');
wp_enqueue_script('fundamentum-script');
}

add_action( 'wp_enqueue_scripts', 'add_fundamentum_scripts_styles' );