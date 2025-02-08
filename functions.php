<?php 
function montheme_register_assets () {
    wp_enqueue_style('google-fonts'); // Ajout de la police
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Gwendolyn', []); // Police Gwendolyn   
}

function fabienne_lecras_enqueue_custom_script() {
    $script_path = get_template_directory() . '/custom.js'; // Chemin absolu du fichier sur le serveur
    
    if (file_exists($script_path)) { // Vérifie si le fichier existe
        wp_enqueue_script(
            'custom-script', // Identifiant unique du script
            get_template_directory_uri() . '/custom.js', // URL publique vers le fichier
            [], // Pas de dépendances spécifiques
            filemtime($script_path), // Version basée sur la date de modification
            true // Charger dans le footer
        );
    } else {
        error_log('Le fichier custom.js est introuvable : ' . $script_path); // Journalise une erreur
    }
}
add_action('wp_enqueue_scripts', 'fabienne_lecras_enqueue_custom_script');

function fabienne_lecras_enqueue_styles() {
    wp_enqueue_style('fabienne_lecras-style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fabienne_lecras_enqueue_styles');

add_action('wp_enqueue_scripts', 'montheme_register_assets');

function montheme_supports () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menus(array(
        'header' => 'En tête du menu',
        'footer_left' => 'Pied de page gauche',
        'footer_right' => 'Pied de page droite',
        'burger_menu' => 'Menu burger'
    ));
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true
    ));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'montheme_supports');

function add_theme_assets(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_script('script-js',get_template_directory_uri(). '/app.js');
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
	register_sidebar([
		'name' => __('reseaux', 'monTheme'),
		'id' => 'reseaux',
		'description' => 'region pour insérer les réseaux widget'
	]);
}
add_action('widgets_init', 'mon_theme_widget_zone');
