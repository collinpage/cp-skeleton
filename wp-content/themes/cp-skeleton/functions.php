<?php

//FUNCTIONS
// Disable use XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );
// Disable X-Pingback to header
add_filter( 'wp_headers', 'disable_x_pingback' );

function disable_x_pingback( $headers ) {
    unset( $headers['X-Pingback'] );
    return $headers;
}

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 3.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}


function register_jquery() {
    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.0.min.js', false, '3.1.0');
        wp_enqueue_script('jquery');
    }
}

define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true); // Disable WPML default CSS - Ain't nobody got time for that

//ACTIONS
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'wp_enqueue_scripts', 'register_jquery' );
?>