<?php
/**
 * Template Name: Front Page
 */

$hero_image     = get_field( 'main_image' )['sizes']['xxl'];
$title          = get_field( 'page_title' );
$button_text    = get_field( 'sign_up_button' );
$button_link    = get_field( 'sign_up_button_link' );
$about_section  = get_field( 'front_page_about_text' );
$banner_text    = get_field( 'sign_up_banner_text' );
$banner_link    = get_field( 'sign_up_banner_link' );

get_header();
?>

<div class="front-page page-wrap">
  <div class="bg-img height-xxl" style="background-image:url('<?php echo esc_url( $hero_image ); ?>');">
    <div class="width-third text-right height-xxl flexing-right alignright flexing-col">
      <h1 class="front-page__title"><?php echo esc_html( $title ); ?></h1>
      <a href="<?php echo esc_url( $button_link ); ?>" class="btn btn--orange margin-right .txt-white"><?php echo esc_html( $button_text ); ?></a>
    </div>
  </div>

  <div class="front-page__content width-max">
    <div class=front-page__about>
        <?php echo $about_section; ?>
    </div>
    <a class="btn front-page__sign-up" href="<?php echo esc_url( $banner_link ); ?>">
      <?php echo esc_html( $banner_text ); ?>
    </a>
  </div>
</div>

<?php get_footer(); ?>
