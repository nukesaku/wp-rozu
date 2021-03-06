<?php
# css, jsの読み込み
function set_up_scripts() {
  //http://necolas.github.io/normalize.css/
  // wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.min.css', '1.0.0', true );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'rozu-bundle', get_template_directory_uri().'/js/bundle.js', 'jquery', '1.0.0', true);
  wp_enqueue_script( 'rozu-sample', get_template_directory_uri().'/js/sample.js', 'jquery', '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'set_up_scripts' );

# アイキャッチ画像有効化
add_theme_support( 'post-thumbnails' );

# ウィジェットの有効化
register_sidebar( [
  'name' => 'ウィジェット1',
  'id' => 'sidebar-1',
  'before_title'  => '<h4 class="widget-title">',
  'after_title'   => '</h4>',
] );

# カスタムメニュー有効化
register_nav_menu( 'primary_menu', 'メインメニュー' );

# header.sub-menuに.hideを追加するWalkerを読み込む
require_once get_template_directory().'/inc/class-header-walker-nav-menu.php';
