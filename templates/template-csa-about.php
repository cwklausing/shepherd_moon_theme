<?php
/**
 * Template Name: CSA About
 */
$title          = get_the_title();
$expected_crops = get_field( 'expected_crops' );

get_header();
?>

<div class="width-max">
  <div>
    <h1><?php echo esc_html( $title ); ?></h1>
  </div>

  <div class="page-content">
    <?php if ( have_posts() ) :

      while ( have_posts() ) : the_post();

        the_content();

      endwhile;

    endif; ?>

    <?php if ( $expected_crops ) : ?>

      <div class="expected-crops">

        <?php while ( have_rows( 'expected_crops' ) ) : the_row();
        $months   = get_sub_field( 'months_harvested' );
        $produce  = get_sub_field( 'produce' );
        ?>

          <div class="expected-crops__row">
            <div class="expected-crops__month flexing">
              <p>
                <?php echo esc_html( $months ); ?>
              </p>
            </div>
            <div class="expected-crops__produce">
              <p>
                <?php echo esc_html( $produce ); ?>
              </p>
            </div>
          </div>

        <?php endwhile; ?>
      </div>

    <?php endif; ?>

  </div><!-- Page content -->
</div>

<?php get_footer(); ?>
