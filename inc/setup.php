<?php
if ( ! function_exists( 'shepherdmoon_setup' ) ) {
  // Molly Horton Pottery theme setup

  function shepherdmoon_setup() {
    // Enable support for Post Thumbnails, and declare two sizes.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 672, 372, true );
    add_image_size( 'xl', 1200, 9999 );
    add_image_size( 'xxl', 2000, 9999 );

    // Enable menus
    add_theme_support( 'menus' );

    // Register a single nav menu for this theme
    register_nav_menus( array(
      'main'        => __( 'Main Menu', 'shepherdmoon' ),
      'secondary'   => __( 'Secondary Menu', 'shepherdmoon'),
    ) );
  }
  add_action( 'after_setup_theme', 'shepherdmoon_setup' );
}
