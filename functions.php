<?php 

function montheme_supports(){
    add_theme_support('title-tag');
}
function montheme_register_assets () {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' , []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', [], false,true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
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
    wp_enqueue_style('fabienne_lecras-style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'fabienne_lecras_enqueue_styles');




add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_action('after_setup_theme', 'montheme_supports');

