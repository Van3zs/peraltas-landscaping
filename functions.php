<?php

// Habilitar Menus
add_theme_support('menus');

// Functions to clean the Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'wp_generator' );

function import_scripts(){
  wp_enqueue_script('jquerry', "https://code.jquery.com/jquery-3.2.1.slim.min.js");
  wp_enqueue_script('popper', "https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js");
  wp_enqueue_script('javascript', "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js");
  wp_enqueue_script('myjavascript', get_template_directory_uri().'/js/javascript.js');
  wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
  wp_enqueue_style('style',get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'import_scripts');
?>