<?php   
 /*Template Name: Slider-rotunda*/ 
 ?>                

<div class="swiper swiper-rotunda">
    <div class="swiper-wrapper">
        <?php 
        $images = get_field('slider_rotunda', 315);



            foreach( $images as $image ) {
        ?> 
        <div class="swiper-slide">
            <img src="<?php echo $image['url']; ?>" alt="">
        </div>
        <?php } ?>
    </div>
    <div class="swiper-button-prev swiper-button-prev-rotunda"></div>
    <div class="swiper-button-next swiper-button-next-rotunda"></div>
</div>
