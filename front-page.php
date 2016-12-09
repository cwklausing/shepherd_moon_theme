<?php
/**
 * Template Name: Front Page
 */

$pottery_gallery = get_field( 'pottery_gallery' );

get_header();
?>

<div class="flexing margin-edge">
  <?php
  if ( have_rows( 'pottery_gallery' ) ) :

    while( have_rows( 'pottery_gallery' ) ) : the_row();
    $piece = get_sub_field( 'pottery_piece' );
    $post = $piece;
	  setup_postdata( $post );
    $first_image  = get_field( 'image_gallery' )[0]['url'];
    $title        = get_the_title( $piece );
    $link         = get_permalink();

    //After getting variables, reset post data
    wp_reset_postdata();
    ?>

    <div class="height-large width-third bg-img pottery" style="background-image:url('<?php echo esc_url( $first_image ); ?>');">
      <a href="<?php echo esc_url( $link ); ?>" class="overlay flexing height-large">
        <h2 class="whitetext"><?php echo esc_html( $title ); ?></h2>
      </a>
    </div>

    <?php

    endwhile;

  else : ?>

  <h2>Sorry, no pottery was found</h2>

  <?php endif; ?>
</div>

<?php get_footer(); ?>
