<?php
    /*Template Name: Contact*/

    get_header();
?>
    <h1><?php the_title() ?></h1>

    <div id="contact-container">
        <div id="contact-infos-container">
            <div id="contact-infos-logo-container">
                <?php $logo_field = get_field('logo') ?>
                <?php if ($logo_field) : ?>
                    <img src="<?php the_field('logo'); ?>">
                <?php endif; ?>
            </div>
            <div class="contact-infos-container">
                <div class="contact-infos-icon-border">
                    <div class="contact-infos-icon">
                        <img src="<?= get_template_directory_uri() . '/img/phone.svg' ?>" alt="numéro de téléphone">
                    </div>
                </div>
                <?php $tel_field = get_field('telephone'); ?>
                <?php if ($tel_field) : ?>
                    <p class="contact-infos" id="tel"><?php echo get_field('telephone'); ?></p>
                <?php endif; ?>
            </div>
            <div class="contact-infos-container">
                <div class="contact-infos-icon-border">
                    <div class="contact-infos-icon">
                        <img src="<?= get_template_directory_uri() . '/img/mail.svg' ?>" alt="numéro de téléphone">
                    </div>
                </div>
                <?php $mail_field = get_field('e-mail'); ?>
                <?php if ($tel_field) : ?>
                    <p class="contact-infos" id="mail"><?php echo get_field('e-mail'); ?></p>
                <?php endif; ?>
            </div>
            <div class="contact-infos-container">
                <div class="contact-infos-icon-border">
                    <div class="contact-infos-icon">
                    <img src="<?= get_template_directory_uri() . '/img/location.svg' ?>" alt="numéro de téléphone">
                    </div>
                </div>
                <?php $address = get_field('adresse'); ?>
                <?php if ($address) : ?>
                    <p class="contact-infos" id="address"><?php echo get_field('adresse'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php the_content(); ?>
    </div>

<?php
    get_footer();
?>