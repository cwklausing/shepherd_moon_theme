<?php
/**
 * Template Name: Default Template
 */

$title = get_the_title();

get_header();
?>

<div class="width-max page-wrap">
  <div>
    <h1><?php echo esc_html( $title ); ?></h1>
  </div>

  <div class="page-content">
    <?php if ( have_posts() ) :

      while ( have_posts() ) : the_post();

        the_content();

      endwhile;

    endif; ?>
  </div>
</div>

<?php get_footer(); ?>
