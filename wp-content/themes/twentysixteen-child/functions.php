<?php

// FUNCTIONS 

// Disable use XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );
// Disable X-Pingback to header
add_filter( 'wp_headers', 'disable_x_pingback' );

function disable_x_pingback( $headers ) {
    unset( $headers['X-Pingback'] );
    return $headers;
}

// Enqueue Styles
function cp_enqueue_styles_scripts() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

    wp_enqueue_script( 'cp-script', get_stylesheet_directory_uri() . '/js/script.yui.js', array( 'jquery' ), 'v1.0', false );
}



// Register Menus(s)
function register_my_menu() {
	register_nav_menus(
  		array(
  			'h-main-menu' => __( 'H - Main Menu' ),
  			'f-main-menu' => __( 'F - Main Menu' )
  		)
  	);
}

// ACTIONS
add_action( 'wp_enqueue_scripts', 'cp_enqueue_styles_scripts' );
add_action( 'init', 'register_my_menu' );
?>