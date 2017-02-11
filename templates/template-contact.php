<?php
/**
 * Template Name: Contact Page
 */

$title            = get_the_title();
$text             = get_field( 'contact_text' );
$contact_methods  = get_field( 'contact_info' );
$facebook_link    = get_field( 'facebook_link', 'options' );
$instagram_link   = get_field( 'instagram_link', 'options' );
$etsy_link        = get_field( 'etsy_link', 'options' );
$email_address    = get_field( 'email_address' );
$email_link       = "mailto:" . $email_address;

get_header();
?>
<div class="page-wrap">
  <div class="width-max page-content">
    <h1 class="center"><?php echo esc_html( $title ); ?></h1>
    <p class="margin-bottom">
      <?php echo $text; ?>
    </p>
  </div>
  <div class="width-max">
    <?php if ( $contact_methods ) :
      while ( have_rows( 'contact_info' ) ) : the_row();
      $method = get_sub_field( 'contact_method' );
      $text   = get_sub_field( 'contact_method_text' );
      ?>

      <div class="social-media margin-bottom margin-left flex-simple">

      <?php
      if ( $method == 'Etsy' ) :
        $link = $etsy_link
      ?>
        <a href="<?php echo esc_url( $etsy_link ); ?>" target="_blank" class="margin-right">
          <svg aria-labelledby="icon-etsy" class="social-media__icon">
            <use xlink:href="#icon-etsy"></use>
          </svg>
        </a>

      <?php elseif ( $method == 'Facebook' ) :
        $link = $facebook_link;
        ?>

        <a href="<?php echo esc_url( $facebook_link ); ?>" target="_blank" class="margin-right">
          <svg aria-labelledby="icon-facebook" class="social-media__icon">
            <use xlink:href="#icon-facebook"></use>
          </svg>
        </a>

      <?php elseif ( $method == 'Instagram' ) :
        $link = $instagram_link;
        ?>

        <a href="<?php echo esc_url( $instagram_link ); ?>" target="_blank" class="margin-right">
          <svg aria-labelledby="icon-instagram" class="social-media__icon">
            <use xlink:href="#icon-instagram"></use>
          </svg>
        </a>

      <?php elseif ( $method == 'Email' ) :
        $link = $email_link;
        ?>

        <a href="<?php echo esc_url( $email_link ); ?>" target="_blank" class="margin-right">
          <svg aria-labelledby="icon-email" class="social-media__icon">
            <use xlink:href="#icon-email"></use>
          </svg>
        </a>

      <?php endif; ?>

        <a href="<?php echo esc_url( $link ); ?>" target="_blank">
          <span><?php echo $text; ?></span>
        </a>
      </div>

    <?php endwhile;
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
