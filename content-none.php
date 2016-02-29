<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 20.01.16
 * Time: 23:36
 */?>
<div class="col-xs-12 text-center">
    <div class="col-xs-12 text-center">
            <?php $logo_top = get_theme_mod('chemiko_top_logo'); if(isset($logo_top) || !empty($logo_top)): ?><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $logo_top; ?>"/></a><?php endif;?>
        <div
        <div class="col-xs-12">
            <?php if($lang = 'ukr') :?>
                Oops!
                Можливо, ця сторінка більше не існує або вона просто була переміщена чи знаходиться в створенні.
            <p>Можливо найкращим рішенням буде перейти знов на домашню сторінку.</p>
                <p>Якщо проблема не вирішується, повідомте нас.</p>

                <p>Ваш Chemiko</p>

                <p>Якщо ви бажаєте перейти на ДОМАШНЮ СТОРІНКУ натисніть <a href="<?php echo esc_url(home_url('/')); ?>">тут</a></p>

            <?php endif;?>
    </div>
