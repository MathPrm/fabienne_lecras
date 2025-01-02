<?php

function montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menus(array(
        'header' => 'En tête du menu',
        'footer_left' => 'Pied de page gauche',
        'footer_right' => 'Pied de page droite',
    ));
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

function mon_theme_widget_zone(){
	register_sidebar([
		'name' => __('bas_gauche', 'monTheme'),
		'id' => 'bas-gauche',
		'description' => 'region en bas à gauche pour insérer un widget'
	]);
	register_sidebar([
		'name' => __('bas_centre', 'monTheme'),
		'id' => 'bas-centre',
		'description' => 'region en bas au centre pour insérer un widget'
	]);
	register_sidebar([
		'name' => __('bas_droite', 'monTheme'),
		'id' => 'bas-droite',
		'description' => 'region en bas à droite pour insérer un widget'
	]);
}
add_action('widgets_init', 'mon_theme_widget_zone');
