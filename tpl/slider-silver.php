 <?php   
 /*Template Name: Slider-silver*/ 
 ?>                
                    <div class="swiper swiper-silver-hall">
                        <div class="swiper-wrapper">
                        <?php $images = get_field('slider_silver', 306); 
                        foreach( $images as $image ) {
                                ?> 
                        <div class="swiper-slide">
                        <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                            <?php } ?>    
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-silver"></div>
                        <div class="swiper-button-next swiper-button-next-silver"></div>
                    </div>
 