<?php 

/*Template Name: Контакты*/

get_header(); ?>

<main class="main">
        <section class="map">
            <div class="container page-bg-top">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title">Контакты</h1>
                <div class="map__yandex">
                    <div class="map__widget">
                        <div class="map__phone">
                            <a href="tel:+<?php echo get_field( 'phone_number', 16 ); ?>" class="map__phone-link"><?php echo get_field( 'phone', 16 ); ?></a>
                            <a href="mailto:<?php echo get_field( 'link_email', 16 ); ?>" class="footer-navigation__link" target="_blank"><?php echo get_field( 'link_email', 16 ); ?></a>
                        </div>
                        <p class="map__address"> <span>Адрес:</span> Воронеж, улица 1 мая, дом 118</p>
                        <p class="map__working-time"><span>Проведение банкетов:</span> <?php echo get_field( 'time_event', 16 ); ?></p>
                        <p class="map__watching-time"><span>Просмотр залов:</span> <?php echo get_field( 'time_watch', 16 ); ?></p>
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
                    <div class="map__desctop">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A57f82c4320cb573837c234cf6a877ec9b58e6aebcffa83300434d827642a095d&amp;width=100%25&amp;height=775&amp;lang=ru_RU&amp;scroll=false"></script>
                    </div>
                    <div class="map__mobile">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A57f82c4320cb573837c234cf6a877ec9b58e6aebcffa83300434d827642a095d&amp;width=100%25&amp;height=430&amp;lang=ru_RU&amp;scroll=false"></script>
                    </div>
                </div>
            </div>
    </section>
 
<?php get_footer(); ?>