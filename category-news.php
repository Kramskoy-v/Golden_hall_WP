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
        <h2 class="page-title news__title">Новости</h2>
        <?php if (have_posts()) { ?>
        <div class="news__list">
            <?php while (have_posts()) { the_post(); ?>
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
                        <?php echo get_the_date('j F Y');?>
                    </p>
                    <a href="<?php echo get_permalink() ?>" class="news__link">Подробнее ></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</section>
<?php get_footer(); ?>