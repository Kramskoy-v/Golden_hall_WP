<?php 

/*Template Name: Silver Hall*/

get_header(); ?>

<main class="main">
    <section class="hall">
        <div class="container page-bg-top">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
            <h1 class="page-title"><?php echo get_the_title() ?></h1>
            <div class="silver-hall">
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
    </div>

        </div>
    </section>
    <section class="show-info">
        <div class="container page-bg-top">
            <div class="section-block__info">
                <div class="section-block__item">
                <?php echo get_field('first_text', 36)?>
                </div>
            </div>
        </div>
    </section>
    <section class="hall">
        <div class="container page-bg-top">
            <div class="features__list">
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/parking.svg" alt=""
                            class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>до 50 праковочных </span>мест</h3>
                </div>
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/check.svg" alt="" class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Средний чек от 2000 ₽ </span>Golden Hall</h3>
                </div>
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/check.svg" alt="" class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Средний чек от 2000 ₽ </span>Silver Hall</h3>
                </div>
                <div class="features__diamond">
                    <div class="features__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cake.svg" alt="" class="featurs__img">
                    </div>
                    <h3 class="features__title"><span>Собственный </span>кондитер</h3>
                </div>
            </div>
            <div class="hall__photo">
                <div class="hall__photo-item w-32">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-1.jpg" alt=""
                        class="hall__photo-img">
                </div>
                <div class="hall__photo-item w-32">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-2.jpg" alt=""
                        class="hall__photo-img">
                </div>
                <div class="hall__photo-item w-32">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-3.jpg" alt=""
                        class="hall__photo-img">
                </div>
            </div>
        </div>
    </section>
    <section class="show-info">
        <div class="container page-bg-top">
            <div class="section-block__info">
                <div class="section-block__item">
                <?php echo get_field('second_text', 36)?>
                </div>
            </div>
        </div>
    </section>
    <section class="hall">
        <div class="container page-bg-top">
            <div class="hall__photo">
                <div class="hall__photo-item w-49">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-4.jpg" alt=""
                        class="hall__photo-img">
                </div>
                <div class="hall__photo-item w-49">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-5.jpg" alt=""
                        class="hall__photo-img">
                </div>
            </div>
        </div>
    </section>
    <section class="show-info">
        <div class="container page-bg-top">
            <div class="section-block__info">
                <div class="section-block__item">
                <?php echo get_field('third_text', 36)?>
                </div>
            </div>
        </div>
    </section>
    <section class="hall">
        <div class="container page-bg-top">
            <div class="hall__photo">
                <div class="hall__photo-item w-32">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-6.jpg" alt=""
                        class="hall__photo-img">
                </div>
                <div class="hall__photo-item w-66">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/silver_hall-7.jpg" alt=""
                        class="hall__photo-img">
                </div>
            </div>
        </div>
    </section>
    <section class="show-info">
        <div class="container page-bg-top">
            <div class="section-block__info">
                <div class="section-block__item">
                <?php echo get_field('fourth_text', 36)?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>