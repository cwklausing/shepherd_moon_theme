<?php
// Theme setup
require_once( "inc/setup.php" );

// Google Maps API
require_once( "inc/google_maps.php" );

// Enqueue files
require_once( "inc/enqueue.php" );

// Custom PHP
require_once( "inc/custom.php" );

// Add Options page using Advanced Custom Fields
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
