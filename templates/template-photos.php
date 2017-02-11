<?php
/**
 * Template Name: Photos
 */

$gallery  = get_field( 'gallery' );

get_header();
?>

<div class="photos width-max page-wrap">
  <div class="photos__header">
    <h1 class="photos__title"><?php the_title(); ?></h1>
  </div>

  <div class="photos__gallery flexing">
    <?php if ( $gallery ) :
      foreach ( $gallery as $image ) : ?>

      <a href="<?php echo $image['url']; ?>" class="photos__single bg-img" style="background-image:url('<?php echo esc_url( $image['sizes']['large']); ?> ');">
      </a>

      <?php endforeach; ?>
      <span class="photos__single flex-fill"></span>
      <span class="photos__single flex-fill"></span>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
