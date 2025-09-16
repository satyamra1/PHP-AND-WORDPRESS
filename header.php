<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <nav>
      <?php wp_nav_menu(['theme_location' => 'primary']); ?>
    </nav>
  </header>
