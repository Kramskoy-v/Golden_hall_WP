<?php 

/*Template Name: Меню кухни*/

get_header(); ?>

<main class="main">
        <section class="food-menu">
            <div class="container page-bg-top">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title"><?php echo get_the_title() ?></h1>
              		 <div class="section-block__info p-30">
                <div class="section-block__item">
               <?php the_content() ?>
                </div>
            </div>
            
            <?php
			if (have_rows('food', 20)) { // если найдены данные 
				?>
                     <div class="swiper swiper-food-menu">
                    <div class="swiper-wrapper swiper-wrapper-food-menu">
                    <?php $images = get_field('food', 20);
                   
                        foreach( $images as $image ) {
                                ?> 
                         <div class="swiper-slide swiper-slide-gallery">
                        <img src="<?php echo $image['url']; ?>" alt="">
                    </div>
                       <?php } ?> 
                    </div>
                 <div class="swiper-button-prev swiper-button-prev-food"></div>
                <div class="swiper-button-next swiper-button-next-food"></div>
            </div>
            </div>
            <?php	
			} else {
				// строки не найдены 
			}
			?>
          
            </div>
        </section>
      

<?php get_footer(); ?>