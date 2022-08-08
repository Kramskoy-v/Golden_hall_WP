<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="navigation">
                <div class="navigation__logo">
                    <a href="<?php echo get_permalink(12) ?>" class="navigation__link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Логотип Golden Hall" class="navigation__img">
                    </a>
                </div>
                <nav class="menu">
                    <div class="cross-close">
                        <span></span>
                        <span></span>
                    </div>

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_class' => 'menu__list',
                        'menu_id' => ''
                    ])
                    ?>

                    <div class="menu__mobile-soc">
                        <div class="map__phone">
                            <a href="tel:+<?php echo get_field( 'phone_number', 16 ); ?>" class="map__phone-link"><?php echo get_field( 'phone', 16 ); ?></a>
                            <a href="mailto:<?php echo get_field( 'link_email', 16 ); ?>" class="map__site-link" target="_blank"><?php echo get_field( 'link_email', 16 ); ?></a>
                        </div>
                        <div class="map__socials">
                        <a href="viber://chat?number=%2B<?php echo get_field( 'viber_phone', 16 ); ?>" target="_blank" class="map__soc-link">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/viber_brown.svg" alt="viber" class="map__icon">
                        </a>
                            <span></span>
                            <a href="https://t.me/+<?php echo get_field( 'telegram_phone', 16 ); ?>" target="_blank" class="map__soc-link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/telegram_brown.svg" alt="telegram" class="map__icon">
                            </a>
                            <span></span>
                            <a href="<?php echo get_field( 'vkontakte_link', 16 ); ?>" target="_blank" class="map__soc-link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/vk_brown.svg" alt="vk" class="map__icon">
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="navigation__wrap-header">
                <div class="navigation__phone">
                    <a href="tel:+<?php echo get_field( 'phone_number', 16 ); ?>" class="navigation__phone-link" target="_blank">
                    <?php echo get_field( 'phone', 16 ); ?></a>
                </div>
                    <ul class="socialnet">
                        <li class="socialnet__item">
                            <a href="viber://chat?number=%2B<?php echo get_field( 'viber_phone', 16 ); ?>" class="socialnet__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/viber_color.svg" alt="viber" class="socialnet__ico"></a></li>
                        <li class="socialnet__item">
                            <a href="https://t.me/+<?php echo get_field( 'telegram_phone', 16 ); ?>" class="socialnet__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/telegram_color.svg" alt="telegram" class="socialnet__ico"></a></li>
                        <li class="socialnet__item">
                            <a href="<?php echo get_field( 'vkontakte_link', 16 ); ?>" class="socialnet__link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/vk_color.svg" alt="vk" class="socialnet__ico"></a></li>
                    </ul>    
                </div>
                <div class="navigation__phone-icon">
                    <a href="tel:+<?php echo get_field( 'phone_number', 16 ); ?>" class="phone-icon__link" target="_blank">
                    </a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>