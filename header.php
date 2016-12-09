<?php
/**
 * Template for the Header
 */

$header_image = get_field( 'header_image', 'options' );
$menu_array = array(
  'menu'            => 'Main Menu',
  'menu_class'      => 'flexing',
  'container'       => false,
  'theme_location'  => 'main',
)
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header>
    <div class="row height-small bg-img" style="background-image:url('<?php echo esc_url( $header_image ); ?>');">
      <h1 class="off-screen"><?php bloginfo( 'name' ); ?></h1>
    </div>
    <nav class="row margin-edge">
      <?php wp_nav_menu( $menu_array ); ?>
    </nav>
  </header>
