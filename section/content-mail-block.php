<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 29.12.15
 * Time: 18:02
 */
$nameplaceholder = array(
    'en'    => 'Name',
    'ru'    => 'Имя',
    'ukr'   => 'Ім\'я',
    'cs'    => 'Jméno',
);
$phoneplaceholder = array(
    'en'    => 'Phone',
    'ru'    => 'Телефон',
    'ukr'   => 'Телефон',
    'cs'    => 'Telefon',
);
$textareaplaceholder = array(
    'en'    => 'Your message',
    'ru'    => 'Текст',
    'ukr'   => 'Текст',
    'cs'    => 'Tvoje zpráva',
);
$button = array(
    'en'    => 'Send',
    'ru'    => 'Отправить',
    'ukr'   => 'Відправить',
    'cs'    => 'Poslat',
);
?>
<div class="col-xs-12 mail-block">
    <div class="col-xs-12 title-mail">обратная связь</div>
    <div class="container mail-container">

            <div class="col-xs-12 col-md-6 col-sm-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $nameplaceholder[$lang];?>">
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6">
                <input type="tel" name="phone" id="phone" placeholder="<?php echo $phoneplaceholder[$lang];?>" class="form-control">
            </div>
    <div class="col-xs-12 col-md-12 col-sm-12">
        <textarea name="mail_text" id="mail_text" class="form-control" rows="3" placeholder="<?php echo $textareaplaceholder[$lang];?>"></textarea>
    </div>
        <div class="col-xs-12 button-box-mail"><button class="btn btn-default" type="submit"><?php echo $button[$lang];?></button></div>
    </div>
</div>
