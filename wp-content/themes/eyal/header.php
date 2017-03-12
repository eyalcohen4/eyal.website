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
        <div class="header__nav__brand">
          <img class="header__logo__img" src="https://eyalcohen4.github.io/teapot.png">
          <a class="header__nav__brand__text" href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a>
        </div>
        <?php do_action('mn_nav'); ?>

        <div class="header__nav__main header__nav__main--desktop">
          <?php

            $args = array(
              'theme_location' => 'primary'
            );

          ?>

          <?php wp_nav_menu( $args ); ?>

        </div>
    </nav>
      <h1 class="header__title">
          Innovative T-Shirts Creators
      </h1>

      <svg class="header__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100" preserveAspectRatio="none">
        <circle fill="white" cx="0" cy="100" r="100" />
        <circle fill="white" cx="200" cy="100" r="100" />
      </svg>

      <h4 class="header__description"> <?php bloginfo('description') ?> </h4>
      <div class="header__action">
        <a href="/shop" class="header__action__button"> Order Now </a>
      </div>

    </header>
