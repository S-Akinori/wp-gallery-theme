<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_template_part('template-parts/meta-data'); ?>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?= get_option('company0_logo'); ?>"  alt="<?= bloginfo('title'); ?>" /></a></div>
    <nav class="header__nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
      ));
      ?>
    </nav>
    <span class="material-symbols-outlined md:hidden js-menu-toggler icon">
      menu
    </span>
  </header>
  <div class="sp-menu-container">
    <div class="text-right">
      <span class="material-symbols-outlined js-menu-toggler icon">
        close
      </span>
    </div>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
      ));
      ?>
    </nav>
  </div>
  <main>