<?php
function sa_fitness_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sa_fitness_enqueue_styles');

// Register the navigation menu
function register_my_menus() {
  register_nav_menus(
      array(
          'primary_menu' => __( 'Primary Menu' )
      )
  );
}
add_action( 'init', 'register_my_menus' );


?>