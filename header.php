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
    <div class="container clearfix">
      <div class="hamburger">
        <div class="menu-trigger js-trigger">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <h1 class="site-title"><a href="<?= home_url('/') ?>"><?php bloginfo( 'name' ) ?></a></h1>
      <?php if ( is_home() ) : ?>
        <p class="description"><?php bloginfo( 'description' ) ?></p>
      <?php endif; ?>
    </div>
  </header>
  <nav>
    <div class="container">
      <?php
      $args = [
        'theme_location' => 'primary_menu',
        'menu_class' => 'menu hide',
        'walker' => new Header_Walker_Nav_Menu()
      ];
      wp_nav_menu( $args );
      ?>
    </div>
  </nav>
  <div class="keyvisual">
    <div class="keyvisual-container"></div>
  </div>
