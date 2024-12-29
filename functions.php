 <?php

  function theme_enqueue_styles() {
    // Lier la feuille de style principale
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // Si vous avez un fichier CSS personnalisé :
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
