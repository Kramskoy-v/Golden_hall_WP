<?php get_header(); ?>
<main class="main">
<section class="news-all news">
    <div class="container">
        <div class="breadcrumbs">
            <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
        </div>
        <h1 class="page-title news__title"><?php single_cat_title();?></h1>
   
        <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
            <h2 class="photo-gallery__title"><?php the_title()?></h2>
                <div class="photo-gallery__swiper">
                    <div class="swiper mySwiper swiper-gallery">
                        <div class="swiper-wrapper swiper-wrapper-gallery">
                <?php
                $images = get_field('gallery_1');
                    foreach ($images  as $i ) {
                ?>

                    <div class="swiper-slide swiper-slide-gallery">
                    <a data-fancybox="responsive" data-src="<?php echo $i['url']; ?>">
                            <img src="<?php echo $i['url']; ?>" alt="" width="100%" height="100%" />
                        </a>
                        
                        </div>


           <?php } ?> 
                  
                </div>
                <div class="swiper-button-prev swiper-button-prev-gallery"></div>
                <div class="swiper-button-next swiper-button-next-gallery"></div>
            </div>
            <?php }} ?>
                    </div>
</section>
<?php get_footer(); ?>