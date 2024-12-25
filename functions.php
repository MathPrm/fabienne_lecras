<?php

function montheme_supports () {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'montheme_supports');

function add_theme_assets(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_theme_assets' );
