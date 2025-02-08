<?php
    /*Template Name: Restaurations*/

    get_header();
?>

<div class="restaurations-submenu">
    <div class="restaurations-submenu-container">
        <div id="restaurations-menu-logo-container-1">
            <?php $logo_field = get_field('image_1'); ?>
            <?php if ($logo_field) : ?>
                <img src="<?php the_field('image_1'); ?>">
            <?php endif; ?>
        </div>
        <div class="trait"></div>
        <div id="restaurations-submenu-links">
                <ul>
                    <li id="menu-peintures"><a href="">PEINTURES</a></li>
                    <li id="menu-dorures"><a href="">DORURES</a></li>
                </ul>
        </div>
        <div class="trait"></div>
        <div id="restaurations-menu-logo-container-2">
            <?php $logo_field = get_field('image_2') ?>
            <?php var_dump($logo_field) ?>
            <?php if ($logo_field) : ?>
                <img src="<?php the_field('image_2'); ?>">
            <?php endif; ?>
        </div>
    </div>

</div>