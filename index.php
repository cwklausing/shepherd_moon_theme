<?php

/**
 * Fallback template for non-specified pages
 */

// Page variables
$title = get_the_title();

get_header();
?>

<section class="wrapper">
  <div class="page-header">
    <h1 class="page-title"><?php echo $title; ?></h1>
  </div>

  <div class="page-content">
    <?php if ( have_posts() ) :

      while( have_posts() ) : the_post(); ?>

      <div class="the-post__single">
        <h2 class="the-post__title"><?php the_title(); ?></h2>
      </div>

    <?php

      endwhile;

      else : ?>

      <div class="the-post__single">
        <h2 class="the-post__title"><?php _e( 'Sorry, no pages found' ); ?></h2>
      </div>

      <?php

    endif; ?>

  </div>

</section>

<?php get_footer(); ?>
