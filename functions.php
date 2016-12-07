<?php

if ( ! function_exists( 'mhpottery_setup' ) ) {
  // Molly Horton Pottery theme setup

  function mhpottery_setup() {
    // Enable support for Post Thumbnails, and declare two sizes.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 672, 372, true );

    // Enable menus
    add_theme_support( 'menus' );

    // Register a single nav menu for this theme
    register_nav_menus( array(
      'main'        => __( 'Main Menu', 'mhpottery' ),
      'secondary'   => __( 'Secondary Menu', 'mhpottery'),
    ) );
  }
}

add_action( 'after_setup_theme', 'mhpottery_setup' );

// Enqueue theme styles
if ( ! function_exists( 'mhpottery_styles' ) ) {
  function mhpottery_styles() {

    wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assets/css/app.css') ;
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

  }
}

add_action( 'wp_enqueue_scripts', 'mhpottery_styles' );

// Enqueue theme javascript
if ( ! function_exists( 'mhpottery_js' ) ) {
  function mhpottery_js() {

    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true ) ;

  }
}

add_action( 'wp_enqueue_scripts', 'mhpottery_js' );

// Add Options page using Advanced Custom Fields
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
