<?php 

/*Template Name: Шаблон мероприятий*/

get_header(); ?>

<main class="main">
    <section class="weddings">
        <div class="container page-bg-top">
            <div class="weddings__top">
                <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title">
                    <?php the_title() ?>
                </h1>
                <div class="weddings__image">
                    <?php echo the_post_thumbnail() ?>
                </div>
                <div class="section-block__info">
                    <div class="section-block__item">
                        <h2 class="section-block__title"></h2>
                        <?php the_content() ?>

                    </div>
                </div>
        </div>        
    </section>
 

<?php get_footer(); ?>