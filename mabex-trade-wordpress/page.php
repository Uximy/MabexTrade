<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mabex_trade
 */

get_header();
?>

    <button class="phone">
        <img src="<?php the_field('phone');?>" alt="phone">
    </button>
    <section>
        <div class="projects">
            <h2>Наши проекты</h2>
            <p>Интеллект - лучший строительный материал</p>            
        </div>

        <div class="menu_projects">
            <ul>
                <li>Все</li>
                <li>В продаже</li>
                <li>Реализованные</li>
            </ul>
            <button class="btn-watch">Смотреть все ЖК</button>
        </div>


        <div class="block_projects">
            <div class="block1">
                <div class="section_poroject_top">
                    <img src="<?php the_field('section_poroject_top');?>" alt="Rectangle_52">
                    <div class="top_text">
                        <span>В продаже</span>
                        <span>Доступно в рассрочку</span>
                    </div>
                </div>
                <div class="description">
                    <h2>ЖК «Акан серы»</h2>
                    <div class="line"></div>
                    <p>
                        Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. 
                        Вам будет необходимо предоставить исходные данные, 
                        по которым наши копирайтеры составят правильный текст.
                    </p>
                </div>
            </div>

            <section class="block">
                <div class="block_mini">
                    <div class="section_poroject_top">
                        <img src="<?php the_field('block_mini1');?>" alt="Отель «The ONE hotel Astana»">
                        <div class="top_text_realized">
                            <span>Реализованные</span>
                        </div>
                    </div>
                    <div class="description_mini">
                        <h2>Отель «The ONE hotel Astana»</h2>
                        <div class="line_mini"></div>
                    </div>
                </div>

                <div class="block_mini">
                    <div class="section_poroject_top">
                        <img src="<?php the_field('block_mini2');?>" alt="Отель «The ONE hotel Astana»">
                        <div class="top_text_realized">
                            <span>Реализованные</span>
                        </div>
                    </div>
                    <div class="description_mini">
                        <h2>Отель «The ONE hotel Astana»</h2>
                        <div class="line_mini"></div>
                    </div>
                </div>
            </section>
        </div>

        <div class="block2">
            <div class="block_mini">
                <div class="section_poroject_top">
                    <img src="<?php the_field('block_mini3');?>" alt="Бизнес-центр «Aqbulak Plaza»»">
                    <div class="top_text_realized">
                        <span>Реализованные</span>
                    </div>
                </div>
                <div class="description_mini">
                    <h2>Бизнес-центр «Aqbulak Plaza»</h2>
                    <div class="line_mini"></div>
                </div>
            </div>
            <div class="block_mini">
                <div class="section_poroject_top">
                    <img src="<?php the_field('block_mini4');?>" alt="ЖК «Статус»">
                    <div class="top_text_realized">
                        <span>Реализованные</span>
                    </div>
                </div>
                <div class="description_mini">
                    <h2>ЖК «Статус»</h2>
                    <div class="line_mini"></div>
                </div>
            </div>
            <div class="block_mini">
                <div class="section_poroject_top">
                    <img src="<?php the_field('block_mini5');?>" alt="ЖК «ARMAN DE LUXE»">
                    <div class="top_text_realized">
                        <span>Реализованные</span>
                    </div>
                </div>
                <div class="description_mini">
                    <h2>ЖК «ARMAN DE LUXE»</h2>
                    <div class="line_mini"></div>
                </div>
            </div>
        </div>

        <div class="builder_info">
            <div class="info">
                <h2>Надежный застройщик</h2>
                <p>
                    Компания «Mabex Trade LTD», основанная в 2004 г., 
                    успешно выполняет миссию по воплощению и преданию городам уникального облика. 
                    С самого момента основания компании важнейшими ценностями были надежность, качество, 
                    постоянное усовершенствование, применение инновационных технологий в строительстве.
                </p>
                <button>Узнать больше</button>
            </div>
           
            <div class="skills">
                <div class="column nizhe">
                    <div class="block_column">
                        <img src="<?php the_field('group_2121');?>" alt="Group_2121">
                        <h3>Высокие Темпы Строительства</h3>
                    </div>
                    <div class="block_column">
                        <img src="<?php the_field('group_2127');?>" alt="Group_2127">
                        <h3>Гарантии Качества Материалов и Работ</h3>
                    </div>
                   <div class="block_column">
                    <img src="<?php the_field('group_2128');?>" alt="Group_2128">
                    <h3>Лучшие Благоустройство и Инфраструктура</h3>
                   </div>
                </div>
                <div class="column vyshe">
                    <div class="block_column">
                        <img src="<?php the_field('group_2129');?>" alt="Group_2129">
                        <h3>Социальная Ответственность</h3>
                    </div>
                    <div class="block_column">
                        <img src="<?php the_field('group_2130');?>" alt="Group_2130">
                        <h3>Высоко - Квалифицировнные Специалисты</h3>
                    </div>
                   <div class="block_column">
                    <img src="<?php the_field('group_2126');?>" alt="Group_2126">
                    <h3>Надежный Партнер</h3>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="consultation">
            <img src="<?php the_field('placeholder');?>" alt="Placeholder">
            <div class="block_consultation">
                <div class="block_consultation_info">
                    <h2>Получить консультацию</h2>
                    <p>
                        Если у Вас возникнут любые вопросы
                        мы будем рады ответить на них!
                    </p>
                    <form class="consultation_inputs">
                        <input type="text" value="Ваше имя">
                        <input type="text" value="+7 (...)">
                        <button type="submit">Отправить</button>
                    </form>
                </div>
                <img src="<?php the_field('arranged-key-notepad-table');?>" alt="arranged-key-notepad-table">
            </div>
        </div>

        <div class="offer">
            <div class="offer_text">
                <h2>Предложения</h2>
                <p>специальные выгодные предложения</p>
            </div>

            <div class="banners owl-carousel owl-theme slider_img">
               <img src="<?php the_field('group_2253');?>" alt="Group 2253">
               <img src="<?php the_field('group_2251');?>" alt="Group 2251">
               <img src="<?php the_field('group_2252');?>" alt="Group 2252">
               <img src="<?php the_field('group_2260');?>" alt="Group 2260">
               <img src="<?php the_field('group_2251_1');?>" alt="Group 2251">
               <img src="<?php the_field('group_2252_1');?>" alt="Group 2252">
            </div>
        </div>

        <div class="achievements">
            <div class="achievements_title">
                <h2>Достижения</h2>
                <p>ставка на качество и профессионализм</p>
            </div>

            <div class="achievements_text">
                <ul>
                    <li>
                        <div class="li_achievements">
                            <div class="title">
                                <h2>100</h2>
                            </div>
                            <span>тысяч</span>
                        </div>
                        <p>Мы построили более 100 000 м</p>
                    </li>
                    <li>
                        <div class="title">
                            <h2>170 +</h2>
                        </div>
                        <p>рабочих мест</p>
                    </li>
                    <li>
                        <div class="title">
                            <h2>12</h2>
                        </div>
                        <p>жилых комплексов</p>
                    </li>
                    <li>
                        <div class="li_achievements">
                            <div class="title">
                                <h2>20</h2>
                            </div>
                            <span>человек</span>
                        </div>
                        <p>Инженерно технический состав</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="banner_apartment">
            <img src="<?php the_field('placeholder_2');?>" alt="Placeholder_2">
            <div class="block_banner_apartment">
                <div class="banner_apartment_info">
                    <h2>Ищите квартиру своей мечты?</h2>
                    <p>
                        Это текст о компании. 
                        Он необходим для дальнейшего продвижения Вашего сайта. 
                        Вам будет необходимо предоставить исходные данные.
                    </p>
                    <button class="banner_apartment_button">Узнать Больше</button>
                </div>
                <img src="<?php the_field('buying-real-estate-concept');?>" alt="Placeholder_2">
            </div>
        </div>

        <div class="block_partners">
            <div class="partners_title">
                <h2>Наши партнеры</h2>
            </div>
            <div class="partners owl-carousel owl-theme partners_slider">
                <div class="partners_img">
                    <img src="<?php the_field('group_2214');?>" alt="Group 2214">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('layer1');?>" alt="layer1">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_12');?>" alt="image 12">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_13');?>" alt="image 13">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_14');?>" alt="image 14">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_15');?>" alt="image 15">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_16');?>" alt="image 16">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_17');?>" alt="image 17">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('kazger_ltd');?>" alt="ТОО КАЗГЕР">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_18');?>" alt="image 18">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_19');?>" alt="image 19">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_20');?>" alt="image 20">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_21');?>" alt="image 21">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_22');?>" alt="image 22">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('image_23');?>" alt="image 23">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('group_2214');?>" alt="Group 2214">
                </div>
                <div class="partners_img">
                    <img src="<?php the_field('group_2215');?>" alt="Group 2215">
                </div>          
             </div>
        </div>
    </section>

<?php
get_footer();