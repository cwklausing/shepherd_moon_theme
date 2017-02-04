<?php
/**
 * Single Newsletter Template
 */

$title      = get_the_title();
$newsletter = get_field( 'newsletter' );

get_header();
?>

<div class="width-max">
  <div>
    <h1><?php echo esc_html( $title ); ?></h1>
  </div>

  <div class="page-content">
    <embed src="<?php echo esc_url( $newsletter ); ?>" width="100%" height="800px" alt="Newsletter"/>
  </div>
</div>

<?php get_footer(); ?>
