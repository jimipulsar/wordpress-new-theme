<?php

  if (!function_exists('import_style')) {

    function import_style() {
      wp_enqueue_style('jimipulsar', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'import_style');
  }

  if (!function_exists('jimipulsar_setup')) {

    function jimipulsar_setup() {

      register_nav_menus(array(
        'header' => 'header'
      ));

      add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'jimipulsar_setup');
  }

  if (!function_exists('jimipulsar_widgets_init')) {

    function jimipulsar_widgets_init() {

      register_sidebar(array(
        'name'          => 'jimipulsar-sidebar',
        'id'            => 'jimipulsar-sidebar'
      ));
    }

    add_action('widgets_init', 'jimipulsar_widgets_init');
  }

?>
