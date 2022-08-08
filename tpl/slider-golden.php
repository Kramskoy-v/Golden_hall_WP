<?php   
 /*Template Name: Slider-golden*/ 
 ?>                

<div class="swiper swiper-golden-hall">
                        <div class="swiper-wrapper">
                        <?php $images = get_field('slider_golden', 309); 
                        foreach( $images as $image ) {
                                ?> 
                            <div class="swiper-slide">
                            <img src="<?php echo $image['url']; ?>" alt="">
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-golden"></div>
                        <div class="swiper-button-next swiper-button-next-golden"></div>
</div>
             