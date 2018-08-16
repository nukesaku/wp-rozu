<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header-container">
      <h1 class="site-title"><a href="<?= home_url('/') ?>"><?php bloginfo( 'name' ) ?></a></h1>
    </div>
  </header>
  <nav>
    <div class="nav-container"></div>
  </nav>
  <div class="keyvisual">
    <div class="keyvisual-container"></div>
  </div>
