  <footer class="footer">

    <p class="footer__copyright"> <?php bloginfo('name') ?> - &copy; <?php echo date('Y') ?>

    <nav class="footer__nav">

        <?php

          $args = [
            'theme_location' => 'footer'
          ];

        ?>

        <?php wp_nav_menu( $args ); ?>

    </nav>

  </footer>

  <?php wp_footer(); ?>

  </body>
</html>
