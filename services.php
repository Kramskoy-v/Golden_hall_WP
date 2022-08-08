<?php 

/*Template Name: Услуги*/

get_header(); ?>

<main class="main">
        <section class="service">
            <div class="container page-bg-top">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title">Услуги</h1>
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