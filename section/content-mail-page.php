<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 29.12.15
 * Time: 18:02
 */
$arrayTMail = array(
    'ru'    => 'Обратная связь',
    'cs'    => 'Zpětná vazba od zákazníků',
    'ukr'   => 'Зворотній зв\'язок',
    'en'    => 'Customer feedback',
);
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
<div class="col-xs-12 mail-block-page no-padding">
    <div class="col-xs-12 title-mail-page"><?php echo $arrayTMail[ICL_LANGUAGE_CODE]?></div>
    <div class="mail-container-page">

            <div class="col-xs-12 no-padding" data-scrollreveal="enter right after 0s over 1s">
                <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $nameplaceholder[ICL_LANGUAGE_CODE];?>">
            </div>
            <div class="col-xs-12 no-padding" data-scrollreveal="enter left after 0s over 1s">
                <input type="tel" name="phone" id="phone" placeholder="<?php echo $phoneplaceholder[ICL_LANGUAGE_CODE];?>" class="form-control">
            </div>
    <div class="col-xs-12 no-padding" data-scrollreveal="enter bottom after 0s over 1s">
        <textarea name="mail_text" id="mail_text" class="form-control" rows="3" placeholder="<?php echo $textareaplaceholder[ICL_LANGUAGE_CODE];?>"></textarea>
    </div>
        <div class="col-xs-12 button-box-mail no-padding"><button class="btn btn-default" type="submit"><?php echo $button[ICL_LANGUAGE_CODE];?></button></div>
    </div>
</div>
