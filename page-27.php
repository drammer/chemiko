<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area container-fluid no-padding">
    <main id="main" class="site-main col-xs-12 col-md-12 col-sm-12 no-padding" role="main">

        <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php
            /**
             * Created by PhpStorm.
             * User: drammer
             * Date: 02.02.16
             * Time: 06:29
             */
            ?>
            <div class="contact-fields">
                <div class="map-big">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4493.378818826941!2d37.63097974268087!3d55.72914962462042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b1bdd93f33f%3A0xab7f29089fa94778!2z0JHQvtC70YzRiNC-0Lkg0KHRgtGA0L7Rh9C10L3QvtCy0YHQutC40Lkg0L_QtdGALiwgNywg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDExNTA1NA!5e0!3m2!1sru!2sua!4v1443102607225" width="100%" height="439" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="callback-wrapp">
                    <div class="box-callback-form container">
                        <div class="col-xs-12 col-sm-12 col-md-4 mail-container">
                                    <div class="title-left-box-input">Напишите нам</div>
                                    <div class="form-input col-xs-12">
                                        <!--                    <label for="send-name">Имя</label>-->
                                        <input type="text" class="form-control" id="send-name" placeholder="Имя">
                                    </div>
                                    <div class="form-input col-xs-12 col-sm-12 col-md-12">
                                        <!--                    <label for="send-tel">Телефон</label>-->
                                        <input type="tel" class="form-control" id="send-tel" placeholder="Телефон">
                                    </div>
                                    <div class="form-input col-xs-12 col-sm-12 col-md-12">
                                        <!--                    <label for="send-email">Email</label>-->
                                        <input type="email" id="send-email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-input col-xs-12 col-sm-12 col-md-12">
                                        <!--                    <label for="send-mess">Сообщение</label>-->
                                        <input id="send-mess" class="form-control" placeholder="Сообщение">
                                    </div>
                                    <input type="text" id="send-info" placeholder="Информация" style="display:none;">
                                    <input type="button" class="" id="send-button" value="Отправить">
<!--<a href="#" class="btn-slider-popup">Заказать обратный звонок</a>-->

                                    <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="wrapp-all-right-mail-box">
                            <div class="addres-box-activ">
                                <div class="title-addres-box-activ">Контакты</div>
                                <div class="addres-box-activ-content">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/addres-active-1.png" class="img-responsive" data-toggle="for-active-address">
                                    <p class="lato-regular" data-toggle="for-active-address"><span>нажмите,<br> чтобы посмотреть</span></p>
                                    <p class="lato-regular">+ 3 8047 250 03 05</p>
                                </div>
                            </div>
                            <div class="right-mail-box">
                                <div class="title-right-box">Контакты</div>
                                <div class="mail-box-content-right">
                                    <div class="phone-box-callback">
                                        <p class="phone-title">Позвоните нам</p>
                                        <p class="phone-text">+ 3 8047 250 03 05</p>
                                    </div>
                                    <div class="address-box-callback">
                                        <p class="address-title">Наш офис</p>
                                        <div class="address-text">
                                            <p>18005, г. Черкассы, Украина</p>
                                            <p>Вячеслава Черновола</p>
                                            <p>улица, дом 6/10</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-address-box">
                                    <div class="site-info-callback">
                                        <p class="site-info-title">Наш сайт</p>
                                        <p class="site-info-text"><a href="www.chemiko.eu">www.chemiko.eu</a></p>
                                    </div>
                                    <div class="button-callback">
                                        <!--                        <input type="button" value="Заказать обратный звонок" class="btn-slider-popup" data-popup-button="Заказать обратный звонок">-->
                                                                         </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 callback-form-contact">
                        <div class="title-left-box-input">Хотите Вам позвоним?</div>
                        <div class="mail-container ">
                         <div class="form-input col-xs-12">
                                        <!--                    <label for="send-name">Имя</label>-->
                                        <input type="text" class="form-control" id="send-name" placeholder="Имя">
                                    </div>
                                    <div class="form-input col-xs-12 col-sm-12 col-md-12">
                                        <!--                    <label for="send-tel">Телефон</label>-->
                                        <input type="tel" class="form-control" id="send-tel" placeholder="Телефон">
                                    </div>
                                    <input type="text" id="send-info" placeholder="Информация" style="display:none;">
                         </div>
                          <a href="#" class="btn-slider-popup">Заказать обратный звонок</a>
                                    <div class="clearfix"></div>
                         </div>
                         </div>

                       </div>
                    </div>
                </div>
            </div>


            <?php
            // Start the loop.
//            while ( have_posts() ) : the_post();
//
//                /*
//                 * Include the Post-Format-specific template for the content.
//                 * If you want to override this in a child theme, then include a file
//                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//                 */
//                get_template_part( 'content', 'page' );
//
//                // End the loop.
//            endwhile;

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
