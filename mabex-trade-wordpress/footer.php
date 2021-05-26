<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mabex_trade
 */

?>
    <footer>
        <div class="main_block_footer">
            <div class="block1_footer">
                <div class="title_footer">
                    <img src="<?php the_field('layer_x0020_1');?>" alt="Mabex Trade Ltd">
                    <h2>Mabex Trade Ltd</h2>
                </div>
                <p>
                    Главный успех компании и качественно выполненные объекты 
                    полностью зависят от высококвалифицированных специалистов, 
                    компетентность которых подтверждена на уровне международной сертификации.
                </p>
            </div>
            
            <div class="block2_footer pd_menu">
                <div class="title_footer_menu">
                    <h3>Разделы</h3>
                </div>
                <ul>
                    <li>Главная</li>
                    <li>О компании</li>
                    <li>Проекты</li>
                    <li>Акции</li>
                    <li>Отдел продаж</li>
                    <li>Контакты</li>
                </ul>
            </div>

            <div class="block3_footer pd_menu">
                <div class="title_footer_menu">
                    <h3>Название ЖК</h3>
                </div>
                <ul>
                    <li>Название ЖК</li>
                    <li>Название ЖК</li>
                    <li>Название ЖК</li>
                    <li>смотреть все</li>
                </ul>
            </div>


            <div class="block4_footer pd_menu">
                <div class="title_footer_menu">
                    <h3>Наши контакты</h3>
                </div>
                <ul>
                    <div class="li_icon li_wh">
                        <img src="<?php the_field('group_73');?>" alt="Group 73">
                        <li>Адрес:  г. Нур-Султан, УЛ. ШАРЛЯ ДЕ ГОЛЛЯ, 3А, 5 ЭТАЖ</li>
                    </div>
                    <div class="li_icon">
                        <img src="<?php the_field('group_75');?>" alt="Group 75">
                        <li>+7(7172) 202 555</li>
                    </div>
                    <li>+7(7172) 202 666</li>
                    <li>+7(705) 783 64 20</li>
                </ul>
            </div>
    
        </div>      

        <div class="bottom_footer">
            <div class="copyright">
                <span><i class="far fa-copyright"></i></span>
                <p>2021. Все права защищены. ©Mabex Trade Ltd.</p>
            </div>

            <div class="social">
                <i class="fab fa-vk"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-telegram-plane"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-f"></i>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/slider.js"></script>
</body>
</html>
