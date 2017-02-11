<?php
/**
 * Template Name: Recipes A-Z
 */

$recipes = get_field( 'recipes' );

get_header();
?>

<div class="width-max-plus page-wrap">
  <div class="width-max">
    <h1><?php the_title(); ?></h1>
  </div>

  <div class="recipes">
    <?php if ( $recipes ) :

      while ( have_rows( 'recipes' ) ) : the_row();
        global $post;
        $post   = get_sub_field( 'recipe_link' );
        $image  = get_sub_field( 'image' );
        $label  = get_sub_field( 'label' );
        setup_postdata( $post );
        ?>

        <article class="recipes__single">
          <a href="<?php the_permalink( $post ); ?>" class="recipes__link">
            <div class="recipes__image">
              <?php echo wp_get_attachment_image( $image, 'large'); ?>
              <div class="recipes__label flexing">
                <h3 class="recipes__text"><?php echo esc_html( $label ); ?></h3>
              </div>
            </div>
            <div class="recipes__header">
              <h2 class="recipes__title"><?php the_title(); ?></h2>
            </div>
          </a>
        </article>

        <?php wp_reset_postdata(); ?>

      <?php endwhile; ?>

      <span class="recipes__single flex-fill">
      </span>
      <span class="recipes__single flex-fill">
      </span>
      <span class="recipes__single flex-fill">
      </span>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
