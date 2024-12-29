<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
               <div class="logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_hea.jpg" alt="Logo Header">
                        </a>
               </div>
               <nav>
                    <ul  class="menu">
                        <a href="/">RESTAURATION</a>
                        <a href="/">CREATIONS</a>
                        <a href="/">A PROPOS</a>
                        <a href="#contact" class="btn-contact">Contact</a> 
                    </ul>       
               </nav>
    </header>
