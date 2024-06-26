<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// add bootstrap
function add_bs_scripts_styles() {
// wp_register_style('adobe-fonts', 'https://use.typekit.net/bmw4zvq.css');
wp_register_style('bootstrap-style', get_template_directory_uri() . '/assets/css/index.css');
 //empty array()for dependencies, version 0.1, place this in footer not head
wp_register_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), true);
// enqueue styles & scripts
wp_enqueue_style('bootstrap-style');
wp_enqueue_script('bootstrap-script');
}

add_action( 'wp_enqueue_scripts', 'add_bs_scripts_styles' );