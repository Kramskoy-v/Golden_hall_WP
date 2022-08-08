<?php 

/*Template Name: Залы*/

get_header(); ?>

<main class="main">
        <section class="halls">
            <div class="container page-bg-top">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title">Наши Залы</h1>
                <div class="halls__rotunda">
                    <div class="halls__info">
                        <h2 class="halls__title"> Ротонда это место для
                            праздника души и тела</h2>
                        <p class="halls__desc">
                            Жизнь человека – это цепочка из будней и праздников, главное составляющее звено которой –
                            серые будни, а яркое, но небольшое – радостные праздники. Поскольку праздничных дней в нашей
                            жизни не так уж много, проводить их надо грамотно и весело. Банкет – неотъемлемая часть
                            любого торжества, поэтому организовать его надо так, чтобы этот день запомнился на всю жизнь
                            и виновникам торжества, и их гостям. </p>
                        <a href="<?php echo get_permalink(32) ?>" class="halls__link">Подробнее</a>
                    </div>
                    <div class="halls__photo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/page_halls_rotunda.jpg" alt="" class="halls__img">
                    </div>
                </div>
               
                <div class="halls__silver">
                    <div class="halls__photo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/page_halls_silver.jpg" alt="" class="halls__img">
                    </div>
                    <div class="halls__info">
                        <h2 class="halls__title">Банкетный дом «Silver Hall» –
                            праздник души и тела</h2>
                        <p class="halls__desc">
                            Жизнь человека – это цепочка из будней и праздников, главное составляющее звено которой –
                            серые будни, а яркое, но небольшое – радостные праздники. Поскольку праздничных дней в нашей
                            жизни не так уж много, проводить их надо грамотно и весело. Банкет – неотъемлемая часть
                            любого торжества, поэтому организовать его надо так, чтобы этот день запомнился на всю жизнь
                            и виновникам торжества, и их гостям. </p>
                        <a href="<?php echo get_permalink(36) ?>" class="halls__link">Подробнее</a>
                    </div>
                </div>
               
                <div class="halls__golden">
                    <div class="halls__info">
                        <h2 class="halls__title">Банкетный дом «Golden Hall» –
                            праздник души и тела</h2>
                        <p class="halls__desc">
                            Жизнь человека – это цепочка из будней и праздников, главное составляющее звено которой –
                            серые будни, а яркое, но небольшое – радостные праздники. Поскольку праздничных дней в нашей
                            жизни не так уж много, проводить их надо грамотно и весело. Банкет – неотъемлемая часть
                            любого торжества, поэтому организовать его надо так, чтобы этот день запомнился на всю жизнь
                            и виновникам торжества, и их гостям. </p>
                        <a href="<?php echo get_permalink(24) ?>" class="halls__link">Подробнее</a>
                    </div>
                    <div class="halls__photo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/page_halls_golden.jpg" alt="" class="halls__img">
                    </div>
                </div>
            </div>

            </div>
            </div>
        </section>
       

<?php get_footer(); ?>