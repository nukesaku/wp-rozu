<?php
function set_up_scripts() {
  wp_enqueue_style( 'org-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'set_up_scripts' );
