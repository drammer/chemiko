<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 02.02.16
 * Time: 06:29
 */
?>
<style>
    html{
        height: 100%;
    }
</style>
<div class="contact-fields">
    <div class="map-big">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4493.378818826941!2d37.63097974268087!3d55.72914962462042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b1bdd93f33f%3A0xab7f29089fa94778!2z0JHQvtC70YzRiNC-0Lkg0KHRgtGA0L7Rh9C10L3QvtCy0YHQutC40Lkg0L_QtdGALiwgNywg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDExNTA1NA!5e0!3m2!1sru!2sua!4v1443102607225" width="100%" height="439" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <div class="callback-wrapp">
        <div class="box-callback-form">
            <span class="title-hiden-callback">Контактная информация</span>
            <span class="button-for-callback-hide"><img src="/img/icons/close2_03.png"> </span>
            <span class="button-for-callback-show"><img src="/img/icons/close-callback.png"> </span>
            <div class="wrapp-left-input-box">
                <div class="wrapp">
                    <div class="left-input-mail">
                        <div class="title-left-box-input">Напишите нам</div>
                        <div class="form-input col-xs-12">
                            <!--                    <label for="send-name">Имя</label>-->
                            <input type="text" id="send-name" placeholder="Имя">
                        </div>
                        <div class="form-input col-xs-12 col-sm-12 col-md-6">
                            <!--                    <label for="send-tel">Телефон</label>-->
                            <input type="tel" id="send-tel" placeholder="Телефон">
                        </div>
                        <div class="form-input col-xs-12 col-sm-12 col-md-6">
                            <!--                    <label for="send-email">Email</label>-->
                            <input type="email" id="send-email" placeholder="Email">
                        </div>
                        <div class="form-input col-xs-12 col-sm-12 col-md-12">
                            <!--                    <label for="send-mess">Сообщение</label>-->
                            <input id="send-mess" placeholder="Сообщение">
                        </div>
                        <input type="text" id="send-info" placeholder="Информация" style="display:none;">
                        <input type="button" class="" id="send-button" value="Отправить">
                    </div>
                    <div class="left-box-mail">
                        <div class="title-left-box">Напишите нам</div>
                        <div class="mail-box-content-left">
                            <img src="/img/icons/mail-box.png" class="img-responsive" data-toggle="for-active-mail">
                            <p class="lato-regular" data-toggle="for-active-mail"><span>нажмите, чтобы написать</span></p>
                            <p class="lato-regular"><a href="mailto:info@example.com">info@example.com</a></p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="wrapp-all-right-mail-box">
                <div class="addres-box-activ">
                    <div class="title-addres-box-activ">Контакты</div>
                    <div class="addres-box-activ-content">
                        <img src="/img/icons/addres-active.png" class="img-responsive" data-toggle="for-active-address">
                        <p class="lato-regular" data-toggle="for-active-address"><span>нажмите,<br> чтобы посмотреть</span></p>
                        <p class="lato-regular">+7 495 668 09 47</p>
                    </div>
                </div>
                <div class="right-mail-box">
                    <div class="title-right-box">Контакты</div>
                    <div class="mail-box-content-right">
                        <div class="phone-box-callback">
                            <p class="phone-title">Позвоните нам</p>
                            <p class="phone-text">+ 7 495 668 09 47</p>
                        </div>
                        <div class="address-box-callback">
                            <p class="address-title">Наш офис</p>
                            <div class="address-text">
                                <p>115054, Москва, Россия</p>
                                <p>Большой Строченовский</p>
                                <p>переулок, дом 7, офис 509</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-address-box">
                        <div class="site-info-callback">
                            <p class="site-info-title">Наш сайт</p>
                            <p class="site-info-text"><a href="www.ubc-corp.ru">www.ubc-corp.ru</a></p>
                        </div>
                        <div class="button-callback">
                            <!--                        <input type="button" value="Заказать обратный звонок" class="btn-slider-popup" data-popup-button="Заказать обратный звонок">-->
                            <a href="#" class="btn-slider-popup">Заказать обратный звонок</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
