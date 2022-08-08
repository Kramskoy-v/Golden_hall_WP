<section class="feedback">
            <div class="container">
                <div class="feedback__wrap">
                  <div class="feedform">
                    
                 <?php echo do_shortcode('[contact-form-7 id="358" title="Контактная форма"]') ?>
                  
                </div>
               
                     <p class="feedform__info">Нажимая кнопку "Отправить", я подтверждаю, что ознакомлен и согласен с
                       условиями <a href="<?php echo get_permalink(399) ?>"> политики обработки персональных данных*</a></p>
                </div>
            </div>
        </section>
</main>        
<footer class="footer">
     <div class="footer-navigation">
         <div class="container">
             <div class="navigation">
                 <div class="navigation__logo">
                     <a href="http://ghall.stage.adm-lab.pw/" class="navigation__link">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Логотип Golden Hall" class="navigation__img">
                     </a>
                 </div>
                 <nav class="menu">

                 <?php
                    wp_nav_menu([
                        'theme_location' => 'bottom',
                        'container' => '',
                        'menu_class' => 'menu__list',
                        'menu_id' => ''
                    ])
                    ?>

                 </nav>
                 <div class="navigation__phone">
                     <a href="tel:+<?php echo get_field( 'phone_number', 16 ); ?>" class="navigation__phone-link"><?php echo get_field( 'phone', 16 ); ?></a>
                     <a href="mailto:<?php echo get_field( 'link_email', 16 ); ?>" class="footer-navigation__link" target="_blank"><?php echo get_field( 'link_email', 16 ); ?></a>
                 </div>
                 <div class="navigation__call">
                     <a href="tel:+<?php echo get_field( 'phone_number', 16 ); ?>" class="phone-icon__link">
                     </a>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="footer__copyright">
            <p><?php echo date('Y')?> Все права защищены</p>
            <a href="<?php echo get_permalink(399) ?>">Политика конфидециальности</a>
        </div>
         <div class="footer__wrap">
             <p class="footer__working-time">Проведение банкетов: <?php echo get_field( 'time_event', 16 ); ?></p>
             <p class="footer__watching-time">Просмотр залов: <?php echo get_field( 'time_watch', 16 ); ?></p>
         </div>
         <div class="footer__socials">
         <a href="viber://chat?number=%2B<?php echo get_field( 'viber_phone', 16 ); ?>" target="_blank" class="footer__link">
                 <img src="<?php bloginfo('template_url'); ?>/assets/img/viber_color.svg" alt="viber" class="footer__icon">
             </a>
             <span>&mdash;</span>
             <a href="https://t.me/+<?php echo get_field( 'telegram_phone', 16 ); ?>" target="_blank" class="footer__link">
                 <img src="<?php bloginfo('template_url'); ?>/assets/img/telegram_color.svg" alt="telegram" class="footer__icon">
             </a>
             <span>&mdash;</span>
             <a href="<?php echo get_field( 'vkontakte_link', 16 ); ?>" target="_blank" class="footer__link">
                 <img src="<?php bloginfo('template_url'); ?>/assets/img/vk_color.svg" alt="vk" class="footer__icon">
             </a>
        </div>
     </div>
     <div class="back_to_top"></div>
 </footer>
 <div class="modal" style="display:none">
        <div id="getorder">
            <div class="call-block">
                <h2 class="modal__title">Подать заявку</h2>
                <div class="modal-form">
                <?php echo do_shortcode('[contact-form-7 id="407" title="Модальное окно"]') ?>
                </div>                
            </div>
        </div>
        <div id="thank">
            <div class="call-block">
                <h2 class="modal__title">Благодарим за заявку! <br> Наш менеджер свяжется с Вами в течение часа.</h2>
            </div>    
        </div>
    </div>
 <?php wp_footer(); ?>
 </body>

 </html>