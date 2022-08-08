<?php 

/*Template Name: Главная*/

    get_header(); ?>

<main class="main">
    <section class="banner">
        <div class="container pos-rel">
            <div class="banner__info">
                <div class="banner__wrap">
                    <h1 class="banner__title">Golden Hall</h1>
                    <h2 class="banner__subtitle">Банкетный зал</h2>
                </div>
                <p class="banner__action">Запишитесь на просмотр залов прямо сейчас</p>
                <a data-fancybox data-src="#getorder" class="banner__link">
                    Подать заявку
                </a>
            </div>
            <div class="swiper swiper-banner">
                <div class="swiper-wrapper">

                    <?php $images = get_field('banner', 12); 
                        foreach( $images as $image ) {
                                ?>
                    <div class="swiper-slide">

                        <img src="<?php echo $image['url']; ?>" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="features__list">
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/build.svg" alt="" class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Выездная</span> регистрация</h3>
                    <p class="fetures__desc">Регистрация с выездом
                        в ротонада</p>
                </div>
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/key.svg" alt="" class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Под</span> ключ</h3>
                    <p class="fetures__desc">Берем ваши хлопоты на
                        себя и доделываем</p>
                </div>
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/experience.svg" alt=""
                            class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Большой</span> опыт</h3>
                    <p class="fetures__desc">Опыт проведения банкетов
                        более 20 лет</p>
                </div>
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/colorize.svg" alt=""
                            class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Цветовые</span> решения</h3>
                    <p class="fetures__desc">Различные цветовые решения
                        украшения зала</p>
                </div>
            </div>
            <h2 class="page-title">Наши Залы</h2>
        </div>
    </section>
    <section class="rotunda">
        <div class="container pos-rel">
            <?php include_once('tpl/slider-rotunda.php');?>

            <div class="parallax-wrap" id="scene3">
                <div class="wrapper__sticker" data-depth="-0.20">
                    <div class="sticker-golden">
                        <h3 class="sticker-golden__title">
                            <a href="<?php echo get_permalink(32) ?>" class="sticker__link">Ротонда</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="silver-hall">
        <div class="container pos-rel">
            <?php include_once('tpl/slider-silver.php');?>

            <div class="parallax-wrap" id="scene">
                <div class="wrapper__sticker" data-depth="0.20">
                    <div class="sticker-silver">
                        <h3 class="sticker-silver__title">
                            <a href="<?php echo get_permalink(36) ?>" class="sticker__link">Silver Hall</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="golden-hall">
        <div class="container pos-rel">
            <?php include_once('tpl/slider-golden.php');?>

            <div class="parallax-wrap" id="scene2">
                <div class="wrapper__sticker" data-depth="-0.40">
                    <div class="sticker-golden">
                        <h3 class="sticker-golden__title"><a href="<?php echo get_permalink(24) ?>"
                                class="sticker__link">Golden Hall</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="departure">
        <div class="container pos-rel" id="scene4">
            <div class="departure__image" data-depth="0.20"> <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/departure-2_bg.png" alt=""
                    class="departure__img">
            </div>
            <div class="wrapper__sticker" data-depth=" 0.50">
                <div class="sticker-silver">
                    <h3 class="sticker-silver__title">
                        <a href="<?php echo get_permalink(247) ?>" class="sticker__link">Выездная регистрация</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services__list">
                <div class="services__item-wrapper bg-events">
                    <div class="service__item-cover">
                        <p class="services__number">01</p>
                        <h4 class="services__title">Оформление мероприятий</h4>
                    </div>
                    <div class="services__item-hover">
                        <div class="services-wrapper">
                            <p class="services__number-hover">01</p>
                            <h4 class="services__title-hover">Оформление мероприятий</h4>
                            <p class="services__desc-hover">Наша компания быстро
                                и качественно организует мероприятие на открытом воздухе, а наше белоснежная ротонда
                                не
                                оставит равнодушным даже самое черствое сердце</p>
                        </div>
                        <a href="<?php echo get_permalink(272) ?>" class="services__link-hover">Подробнее ></a>
                    </div>
                </div>
                <div class="services__item-wrapper bg-show">
                    <div class="service__item-cover">
                        <p class="services__number">02</p>
                        <h4 class="services__title">Шоу программы</h4>
                    </div>
                    <div class="services__item-hover">
                        <div class="services-wrapper">
                            <p class="services__number-hover">02</p>
                            <h4 class="services__title-hover">Шоу программы</h4>
                            <p class="services__desc-hover">Наша компания быстро
                                и качественно организует мероприятие на открытом воздухе, а наше белоснежная ротонда
                                не
                                оставит равнодушным даже самое черствое сердце</p>
                        </div>
                        <a href="<?php echo get_permalink(30) ?>" class="services__link-hover">Подробнее ></a>
                    </div>
                </div>
                <div class="services__item-wrapper bg-master">
                    <div class="service__item-cover">
                        <p class="services__number">03</p>
                        <h4 class="services__title">Ведущий на праздник</h4>
                    </div>
                    <div class="services__item-hover">
                        <div class="services-wrapper">
                            <p class="services__number-hover">03</p>
                            <h4 class="services__title-hover">Ведущий на праздник</h4>
                            <p class="services__desc-hover">Наша компания быстро
                                и качественно организует мероприятие на открытом воздухе, а наше белоснежная ротонда
                                не
                                оставит равнодушным даже самое черствое сердце</p>
                        </div>
                        <a href="<?php echo get_permalink(278) ?>" class="services__link-hover">Подробнее ></a>
                    </div>
                </div>
                <div class="services__item-wrapper bg-loaf">
                    <div class="service__item-cover">
                        <p class="services__number">04</p>
                        <h4 class="services__title">Каравай</h4>
                    </div>
                    <div class="services__item-hover">
                        <div class="services-wrapper">
                            <p class="services__number-hover">04</p>
                            <h4 class="services__title-hover">Каравай</h4>
                            <p class="services__desc-hover">Наша компания быстро
                                и качественно организует мероприятие на открытом воздухе, а наше белоснежная ротонда
                                не
                                оставит равнодушным даже самое черствое сердце</p>
                        </div>
                        <a href="<?php echo get_permalink(276) ?>" class="services__link-hover">Подробнее &gt;</a>
                    </div>
                </div>
                <div class="services__item-wrapper bg-cake">
                    <div class="service__item-cover">
                        <p class="services__number">05</p>
                        <h4 class="services__title">Свадебные торты</h4>
                    </div>
                    <div class="services__item-hover">
                        <div class="services-wrapper">
                            <p class="services__number-hover">05</p>
                            <h4 class="services__title-hover">Свадебные торты</h4>
                            <p class="services__desc-hover">Наша компания быстро
                                и качественно организует мероприятие на открытом воздухе, а наше белоснежная ротонда
                                не
                                оставит равнодушным даже самое черствое сердце</p>
                        </div>
                        <a href="<?php echo get_permalink(274) ?>" class="services__link-hover">Подробнее ></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="swiper mySwiper swiper-gallery">
                <div class="swiper-wrapper swiper-wrapper-gallery">
                    <?php $images = get_field('main_gallery', 12); 
                        foreach( $images as $image ) {
                                ?>
                    <div class="swiper-slide swiper-slide-gallery">

                        <a data-fancybox="responsive" data-src="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="" width="100%" height="100%" />
                        </a>

                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev-gallery"></div>
            <div class="swiper-button-next swiper-button-next-gallery"></div>
        </div>
     </section>

 	<section class="show-info">
        <div class="container page-bg-top pt-0">
            <div class="section-block__info pt-0">
                <div class="section-block__item pt-0">
               <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>