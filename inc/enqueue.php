<?php

// Enqueue theme styles
if ( ! function_exists( 'shepherdmoon_styles' ) ) {
  function shepherdmoon_styles() {

    wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assets/css/app.css') ;
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

    // Google fonts
    wp_enqueue_style( 'sm_google_fonts', "https://fonts.googleapis.com/css?family=Cabin+Condensed:400,700|Lato:400,700|Amatic+SC:700", false );
  }
}

add_action( 'wp_enqueue_scripts', 'shepherdmoon_styles' );

// Enqueue theme javascript
if ( ! function_exists( 'shepherdmoon_js' ) ) {
  function shepherdmoon_js() {

    wp_enqueue_script( 'google_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCAtjl7h3ZqNy9JxPKzYQJfibR14FKymMQ' );

    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true ) ;

  }
}

add_action( 'wp_enqueue_scripts', 'shepherdmoon_js' );
