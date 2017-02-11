<?php
/**
 * Template Name: CSA Pickup
 */

$pickup_sites = get_field( 'pickup_sites' );
$text         = get_field( 'optional_text' );

get_header();
?>

<div class="page-wrap">
  <div class="pickup-page width-max">
    <h1><?php the_title(); ?></h1>
    <?php if( $text ) : ?>
      <div>
        <p>
          <?php echo wp_kses_post( $text ); ?>
        </p>
      </div>
    <?php endif;?>
    <?php if( have_rows( 'pickup_sites' ) ): ?>
      <div class="map-wrap">
        <h2>Pickup Sites</h2>
        <div class="acf-map">
          <?php while ( have_rows( 'pickup_sites' ) ) : the_row();

            $location = get_sub_field('location');

            ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
              <p class="marker__name"><?php the_sub_field('name'); ?></p>
              <p class="marker__address"><?php the_sub_field( 'address' ); ?></p>
              <p class="marker__pickup-time">Pickup Time: <?php the_sub_field( 'pickup_time' ); ?></p>
            </div>
        <?php endwhile; ?>
        </div>

        <div class="pickup-list">
          <?php $letter = 'A'; ?>

          <?php while ( have_rows( 'pickup_sites' ) ) : the_row();

            ?>
            <div class="pickup-site">
              <span class="pickup-site__letter"><?php echo esc_html( $letter ); ?></span>
              <div class="pickup-site__text">
                <p class="pickup-site__name"><?php the_sub_field('name'); ?></p>
                <div class="pickup-site__address"><?php the_sub_field( 'address' ); ?></div>
                <p class="pickup-site__pickup-time">Pickup Time: <?php the_sub_field( 'pickup_time' ); ?></p>
              </div>
            </div>
             <?php
            $letter++;
          endwhile; ?>
        </div>
      </div>

    <?php endif; ?>

    <div class="the-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

          the_content();

        endwhile;

      endif;
      ?>
    </div>

  </div><!-- Pickup page -->

</div>
<?php get_footer(); ?>
