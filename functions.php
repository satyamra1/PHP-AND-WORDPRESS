<?php
// Add theme support for the document title and featured images
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Register a primary navigation menu
function demo_theme_menus() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'demo-theme')
  ]);
}
add_action('after_setup_theme', 'demo_theme_menus');

// Enqueue styles and scripts
function demo_theme_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'demo_theme_assets');
?>
