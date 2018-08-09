<?php
function set_up_scripts() {
  //http://necolas.github.io/normalize.css/
  wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'rozu-common', get_template_directory_uri().'/js/common.js', 'jquery', '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'set_up_scripts' );
