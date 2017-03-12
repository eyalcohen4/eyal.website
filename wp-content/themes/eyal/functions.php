<?php

  function eyal_resources() {

    wp_enqueue_style( 'eyal-style',  get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_style( 'eyal-normalize',  get_template_directory_uri() .'/css/normalize.css', array(), null, 'all' );
    wp_enqueue_style( 'eyal-header',  get_template_directory_uri() .'/css/header.css', array(), null, 'all' );
    wp_enqueue_style( 'eyal-footer',  get_template_directory_uri() .'/css/footer.css', array(), null, 'all' );
    wp_enqueue_style( 'eyal-main',  get_template_directory_uri() .'/css/main.css', array(), null, 'all' );

  }

  add_action('wp_enqueue_scripts', 'eyal_resources');

  // Nav

  register_nav_menus( array(
    'primary' => __('Primary Menu'),
    'footer'  => __('Footer Menu'),
    ) );


  // Woo Commerce
add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
