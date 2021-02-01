<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'favorit_styles' );
function favorit_styles() {
    wp_enqueue_style('uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.6.14/dist/css/uikit.min.css');
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('apps', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null);
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'favorit_script_method');
function favorit_script_method(){
    wp_enqueue_script('vendors', 'https://cdn.jsdelivr.net/npm/uikit@3.6.14/dist/js/uikit.min.js', array(), null, true);
    wp_enqueue_script('vendorsui', 'https://cdn.jsdelivr.net/npm/uikit@3.6.14/dist/js/uikit-icons.min.js', array(), null, true);
}


