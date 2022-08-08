<?php 

/*Template Name: Шоу программы*/

get_header(); ?>

<main class="main">
        <section class="show">
            <div class="container page-bg-top">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title">Шоу-программы</h1>
                <div class="features__list">
                    <div class="features__diamond">
                        <div class="features__image">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/parking.svg" alt="" class="featurs__img">
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
            </div>
        </section>
        <section class="show-photo-gallery__swiper">
            <h2 class="page-title">Фотогалерея</h2>
            <div class="swiper mySwiper swiper-gallery">
                <div class="swiper-wrapper swiper-wrapper-gallery">
                <?php $images = get_field('show_gallery', 30); 
                        foreach( $images as $image ) {
                                ?>
                    <div class="swiper-slide swiper-slide-gallery">
                
                    <a data-fancybox="responsive" data-src="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="" width="100%" height="100%" />
                        </a>
                   
                    </div>
                <?php } ?>    
                </div>

                <div class="swiper-button-prev swiper-button-prev-gallery"></div>
                <div class="swiper-button-next swiper-button-next-gallery"></div>
            </div>
        </section>
        <section class="show-info">
            <div class="section-block__info">
                <div class="section-block__item">
                <?php the_content() ?>
        </section>
     
<?php get_footer(); ?>