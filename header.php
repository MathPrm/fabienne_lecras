<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head() ?>
</head>
<body>
    <header>
        <?php the_custom_logo() ?>
        <h2 class="header-title-mobile">Fabienne Lecras Tanguy</h2>
        <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-burger-body">
            <div id="cross">
                <span id="cross-1"></span>
                <span id="cross-2"></span>
            </div>
            <div class="upper-menu-burger">
                <img src=<?= get_template_directory_uri() . "/img/line-burger.webp"?>>
                <?php wp_nav_menu([
                'theme_location' => 'burger_menu'
                ]); ?>
            </div>
            <div>
                <img src=<?= get_template_directory_uri() .  "/img/drawing.svg"?>>
            </div>
            <div class="reseaux-burger-menu">
                <a href="https://www.facebook.com/fabiennelecras/photos/?_rdr" target="blank"><img src= <?= get_template_directory_uri() . "/img/fb-icon.webp"?>></a>
                <a href="https://www.instagram.com/artdorure/?igsh=OHFreGQwdHVtbDh0#" target="blank"><img src= <?= get_template_directory_uri() . "/img/ig_icon.webp"?>></a>
            </div>
        </div>
            <?php wp_nav_menu([
                'theme_location' => 'header'
            ]); ?> 
    </header>
