<?php
/**
 * Template for the Footer
 */

$facebook_link    = get_field( 'facebook_link', 'options' );
$instagram_link   = get_field( 'instagram_link', 'options' );
$address          = get_field( 'address', 'options' );
$google_maps_link = get_field( 'google_maps_link', 'options' );
$phone_number     = get_field( 'phone_number', 'options' );
$email_address    = get_field( 'email_address', 'options' );

$menu_array = array(
  'menu'            => 'Footer Menu',
  'menu_class'      => 'flexing',
  'container'       => false,
  'theme_location'  => 'secondary',
);

?>

<footer class="flexing pad-right pad-left">
  <div class="sm-address width-third margin-p-none pad-top pad-bottom">
    <a href="<?php echo esc_url( $google_maps_link ); ?>">
      <?php echo $address; ?>
    </a>
    <p>
      <?php echo esc_html( $phone_number ); ?>
    </p>
    <p class="break-word">
      <?php echo esc_html( $email_address ); ?>
    </p>
  </div>

  <div class="social-media width-third flexing footer-section pad-top pad-bottom">
    <a href="<?php echo esc_url( $facebook_link ); ?>" target="_blank">
      <svg aria-labelledby="icon-facebook" class="social-media__icon">
        <use xlink:href="#icon-facebook"></use>
      </svg>
    </a>
    <a href="<?php echo esc_url( $instagram_link ); ?>" target="_blank">
      <svg aria-labelledby="icon-instagram" class="social-media__icon">
        <use xlink:href="#icon-instagram"></use>
      </svg>
    </a>
    <a href="mailto:<?php echo esc_url( $email_address ); ?>">
      <svg aria-labelledby="icon-email" class="social-media__icon">
        <use xlink:href="#icon-email"></use>
      </svg>
    </a>
  </div>

  <nav class="width-third footer-section pad-top pad-bottom">
    <?php wp_nav_menu( $menu_array ); ?>
  </nav>

  <?php wp_footer(); ?>
</footer>

</body>
</html>
