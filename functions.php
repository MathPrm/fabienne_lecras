<?php

function montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true
    ));
}
add_action('after_setup_theme', 'montheme_supports');

function add_theme_assets(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'add_theme_assets' );

function montheme_title($title) {
    $title['title'] = 'Peintures';
    return $title;
}
add_filter('document_title_parts', 'montheme_title');

function montheme_title_separator() {
    return '|';
}
add_filter('document_title_separator', 'montheme_title_separator');
