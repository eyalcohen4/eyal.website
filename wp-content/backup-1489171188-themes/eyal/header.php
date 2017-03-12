<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php bloginfo('name'); ?> </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> >

    <header class="header">

      <nav class="header__nav">
        <div class="header__nav__logo">
          <img class="header__nav__logo__img" src="wp-content/themes/eyal/assets/teapot.png ">
        </div>

        <div class="header__nav__main">
          <?php

            $args = array(
              'theme_location' => 'primary'
            );

          ?>

          <?php wp_nav_menu( $args ); ?>

        </div>
      </nav>

      <h1 class="header__title">
        <a class="header__title__name" href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a>
      </h1>

      <svg class="header__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100" preserveAspectRatio="none">
        <circle fill="white" cx="0" cy="100" r="100" />
        <circle fill="white" cx="200" cy="100" r="100" />
      </svg>

      <h4 class="header__description"> <?php bloginfo('description') ?> </h4>

    </header>
