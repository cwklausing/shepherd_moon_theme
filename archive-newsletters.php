<?php
/**
 * Template Name: Newsletter Archive
 */

if( ! $paged ) {
  $paged = 1;
}

$year = date('Y');

$args = array(
  'year'            => $year,
  'post_status'     => 'publish',
  'post_type'       => 'newsletters',
  'posts_per_page'  => 9,
  'paged'           => $paged,
);

$wp_query = new WP_Query( $args );

get_header();
?>

<div class="width-max">
  <h1><?php the_title(); ?></h1>

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="newsletter">

      <a href="<?php the_field( 'newsletter' ); ?>" target="_blank">
        <h3><?php the_title(); ?></h3>
      </a>

    </div>

  <?php endwhile; ?>
  <?php shepherdmoon_pagination(); ?>
</div>

<?php get_footer(); ?>
