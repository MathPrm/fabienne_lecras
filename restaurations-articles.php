<?php
/*
Template Name: Article Template
Template Post Type: post
*/

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
        ?>
        <!-- submenu peintures ou dorures -->
        <div class="restaurations-submenu">
            <div class="restaurations-submenu-container">
                <div class="restaurations-menu-logo-container-1">
                    <?php $logo_field = get_field('image_1'); ?>
                    <?php if ($logo_field) : ?>
                        <img src="<?php the_field('image_1'); ?>">
                    <?php endif; ?>
                </div>
                <div class="trait"></div>
                <div id="restaurations-submenu-links">
                        <ul>
                        <a href="http://localhost/wordpress/2025/01/12/peintures/"><li id="menu-peintures">PEINTURES</li></a>
                        <a href="http://localhost/wordpress/2025/01/12/dorures/"><li id="menu-dorures">DORURES</li></a>
                        </ul>
                </div>
                <div class="trait"></div>
                <div class="restaurations-menu-logo-container-2">
                    <?php $logo_field = get_field('image_2') ?>
                    <?php if ($logo_field) : ?>
                        <img src="<?php the_field('image_2'); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="articles-restaurations-content">
                    <?php the_content(); ?>
                    <div class="contact-infos-restaurations">
                        <div id="contact-restaurations-logo-container">
                            <?php $logo_field = get_field('logo') ?>
                            <?php if ($logo_field) : ?>
                                <img src="<?php the_field('logo'); ?>">
                            <?php endif; ?>
                        </div>
                        <div id="contact-restaurations-button-container">
                            <a href=<?php get_template_directory_uri() . "/contact"?>>Contactez-moi</a>
                        </div>
                    </div>
                </div>
            </article>
        <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
?>
