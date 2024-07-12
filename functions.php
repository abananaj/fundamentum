<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
//     function chld_thm_cfg_locale_css( $uri ){
//         if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
//             $uri = get_template_directory_uri() . '/rtl.css';
//         return $uri;
//     }
// endif;
// add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
// if ( !function_exists( 'child_theme_configurator_css' ) ):
//     function child_theme_configurator_css() {
//         wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'ollie','ollie' ) );
//     }
// endif;
// add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 15 );

// END ENQUEUE PARENT ACTION


// GSAP
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
// function theme_gsap_script(){
//     // // The core GSAP library
//     // wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true );
//     // ScrollTrigger - with gsap.js passed as a dependency
//     // wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
//     // Your animation code file - with gsap.js passed as a dependency
//     wp_enqueue_script( 'gsap-js', get_stylesheet_directory_uri() . '/assets/gsap/dist/gsap.min.js', array('gsap-js'), false, true );
//     wp_enqueue_script( 'gsap-js2', get_stylesheet_directory_uri() . '/assets/js/index.js', array('gsap-js'), false, true );
// }

// add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

// add bootstrap
function add_theme_scripts_styles() {
// // register styles & scripts
// wp_register_style('adobe-fonts', 'https://use.typekit.net/bmw4zvq.css');
wp_register_style('theme-styles', get_stylesheet_directory_uri() . '/styles/index.css');
 //empty array()for dependencies, version 0.1, place this in footer not head
wp_register_script('theme-scripts', get_stylesheet_directory_uri() . '/scripts/bootstrap.bundle.min.js', array(), true);
wp_register_script('theme-scripts', get_stylesheet_directory_uri() . '/scripts/index.js', array(), true);
// enqueue styles & scripts
wp_enqueue_style('theme-styles');
wp_enqueue_script('theme-scripts');
}

add_action( 'wp_enqueue_scripts', 'add_bs_scripts_styles' );