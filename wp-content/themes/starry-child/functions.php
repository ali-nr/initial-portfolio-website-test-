<?php


//import starry parent style
add_action( 'wp_enqueue_scripts', 'starrychild_enqueue_styles' );
function starrychild_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action('wp_enqueue_scripts', 'starrychild_enqueue_scripts');
function starrychild_enqueue_scripts(){
    wp_enqueue_script('custom js homepage',get_stylesheet_directory_uri() . '/js/homepage-child.js');
}
