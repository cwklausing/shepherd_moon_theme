<?php
/**
 * Template Name: About Me
 */

$title = get_the_title();

get_header();
?>

<div class="width-max">
  <h1 class="center"><?php echo esc_html( $title ); ?></h1>
</div>

<div class="the-content margin-top width-max">
  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    the_content();
    endwhile; endif;
    ?>
</div>

<?php get_footer(); ?>
