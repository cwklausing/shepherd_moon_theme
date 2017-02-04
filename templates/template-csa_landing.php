<?php
/**
 * Template Name: CSA Landing
 */

$csa_section  = get_field( "csa_section" );
$title        = get_the_title();

get_header();
?>

<div class="page_header width-max">
  <h1><?php echo esc_html( $title ); ?></h1>
</div>

<div class="csa-landing width-max flexing margin-top">

  <?php if ( have_rows( "csa_section" ) ) :

    while ( have_rows( "csa_section" ) ) : the_row();
      $section_title  = get_sub_field( 'section_title' );
      $section_image  = get_sub_field( 'section_image' );
      $section_link   = get_sub_field( 'section_link' );

      ?>

      <a class="csa-landing__tile" href="<?php echo esc_url( $section_link ); ?>">
        <div class="bg-img height-large flexing-bottom" style="background-image:url('<?php echo esc_url( $section_image ); ?>');">
          <h2 class="text-center width-hundred"><?php echo esc_html( $section_title ); ?></h2>
        </div>
      </a>

    <?php

    endwhile;

  endif; ?>

</div>

<?php get_footer(); ?>
