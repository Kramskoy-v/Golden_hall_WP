<?php 

/*Template Name: О нас*/

get_header(); ?>

<main class="main">
    <section class="about">
        <div class="container page-bg-top">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
            <h1 class="page-title">
                <?php echo get_the_title() ?>
            </h1>
            <div class="section-block__info">
                <div class="section-block__item">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>
    <section class="coock">
        <div class="container">
            <div class="coock__photo">
                <img src="<?php echo get_field('coock_photo'); ?>" alt="" class="coock__img">
            </div>
            <div class="coock__info">
                <h3 class="coock__title"><?php echo get_field('cook_name'); ?></h3>
                <h4 class="coock__subtitle"><?php echo get_field('cook_position'); ?></h4>
                <?php echo get_field('cook_description');?>
            </div>
<!--             <div class="coock__serving-bg"></div> -->
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h2 class="page-title news__title">Новости</h2>
            <div class="news__list">
                <?php 
        $args = array(
            'cat' => 1, //новости
            'posts_per_page' => 3,
        );
        $q = new WP_Query( $args );
        if( $q->have_posts() ) { ?>
                    <?php while ( $q-> have_posts()) {$q-> the_post(); ?>
                    <div class="news__card">
                        <div class="news__image">
                            <?php echo the_post_thumbnail() ?>
                        </div>
                        <h3 class="news__subtitle">
                            <?php echo get_the_title() ?>
                        </h3>
                        <p class="news__desc">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <div class="news__flex-wrap">
                            <p class="news__date">
                                <?php echo get_the_date();?>
                            </p>
                            <a href="<?php echo get_permalink() ?>" class="news__link">Подробнее ></a>
                        </div>
                    </div>
                    <?php } ?>
              
            </div>
            <?php }
            wp_reset_postdata(); ?>

        </div>
    </section>


    <?php get_footer(); ?>