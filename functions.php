<?php

  function wpt_theme_styles() {
    wp_enqueue_style( 'foundation_css', get_template_directory_uri() . 'css/foundation.php' );
    // wp_enqueue_style( 'normalize_css', get_template_directory_uri() . 'css/normalize.php' );
    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Open+Sans' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }

  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'modernizr_js' , get_template_directory_uri() . '/js/modernizr.js', '', '', false );
    wp_enqueue_script( 'foundation_js' , get_template_directory_uri() . '/js/foundation.js', array('jquery'), '', true );
    wp_enqueue_script( 'main_js' , get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', false );
  }

  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>