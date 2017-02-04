<?php
/**
 * Template for the Header
 */

$home_link    = get_bloginfo( 'url' );
$menu_array = array(
  'menu'            => 'Main Menu',
  'menu_class'      => 'flexing width-hundred .txt-white-child',
  'container'       => false,
  'theme_location'  => 'main',
);

$mobile_menu_array = array(
  'menu'            => 'Main Menu',
  'container'       => false,
  'theme_location'  => 'main',
);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <?php include('assets/images/icons.svg'); ?>
</head>
<body <?php body_class(); ?> >
  <header>
    <h1 class="header__title">Shepherd Moon Farm</h1>
    <div class="btn--menu">
      <div class="top"></div>
      <div class="middle"></div>
      <div class="bottom"></div>
    </div>
    <nav class="header__nav flexing">
      <?php wp_nav_menu( $menu_array ); ?>
    </nav>
    <nav class="mobile-menu none width-hundred">
      <?php wp_nav_menu( $mobile_menu_array ); ?>
    </nav>
  </header>
