<?php 

/*Template Name: Мероприятия*/

get_header(); ?>

<main class="main">
        <section class="events">
            <div class="container page-bg-top">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="page-title">Мероприятия</h1>
                <div class="events__tile-list">
                    <div class="events__card card-small">
                        <h2 class="events__card-title">Свадьбы
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(38) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-big">
                        <h2 class="events__card-title">Выездная регистрация
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(247) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-big">
                        <h2 class="events__card-title">Конференции
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(249) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-small">
                        <h2 class="events__card-title">Банкеты
                            и юбилеи
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(254) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-small">
                        <h2 class="events__card-title">Детские праздники
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(256) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-big">
                        <h2 class="events__card-title">Корпоративы
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(252) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-small">
                        <h2 class="events__card-title">Новый год
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(258) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card card-big">
                        <h2 class="events__card-title">Выпускные
                        </h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(260) ?>" class="events__link">Подробнее ></a>
                    </div>
                    <div class="events__card">
                        <h2 class="events__card-title">Гендер-пати</h2>
                        <p class="events__card-desc">Собрание, совещание групп лиц, отдельных лиц, организации</p>
                        <a href="<?php echo get_permalink(262) ?>" class="events__link">Подробнее ></a>
                    </div>
                </div>
            </div>
        </section>
      

<?php get_footer(); ?>