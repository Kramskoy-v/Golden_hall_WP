<?php 

/*Template Name: Одна новсть/событие
 Template post type: post, page
*/

get_header(); ?>

<main class="main">
        <section class="page-news">
            <div class="container page-bg-top">
                <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>        
            </div>
                <div class="page-news__image">
                   
                <?php echo the_post_thumbnail() ?>
                </div> 
                
                <div class="section-block__item">
                <div class="page-news__date">
                    <?php echo get_the_date('j F Y');?></div>
                <h2 class="section-block__title"><?php the_title() ?></h2>
                    <?php the_content() ?>
                </div>
            </div>
            
    </main>

<?php get_footer(); ?>