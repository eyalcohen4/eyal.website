<?php

  get_header(); ?>
  <main class="main">
      <?php if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
          ?>

          <article class="main__section">
              <?php the_content(); ?>
          </article>

          <?php endwhile;

          else :
          echo '<p> No content found </p>';

          endif; ?>

    </main>

  <?php get_footer(); ?>
