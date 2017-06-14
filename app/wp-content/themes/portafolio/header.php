<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
  </head>
  <body>
  <?php
    wp_nav_menu(
      array (
        'theme_location' => top-menu,
        'container' => 'nav',
        'menu_class' => 'nav_list'
        )
      )
   ?>
