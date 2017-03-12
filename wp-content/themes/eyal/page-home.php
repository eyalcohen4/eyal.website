<?php get_header(); ?>

  <main class="main">
      <?php
          $args = array(
          'post_parent' => $post->ID,
          'post_type' => 'page',
          'orderby' => 'menu_order'
        );

        $child_query = new WP_Query( $args );
      ?>

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

      <article class="main__section">
        <div <?php post_class(); ?>>
          <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('page-thumb-mine');
            }

            the_content();

            ?>
        </div>
        <?php endwhile; ?>
      </article>
      <?php do_action( 'woothemes_features', array('size' => '50', 'before' => '<div class="main__section__feature"', after => '</div>') ); ?>

    </main>

  <?php get_footer(); ?>
