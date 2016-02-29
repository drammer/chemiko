<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 27.12.15
 * Time: 11:15
 */
?>
<div class="col-xs-12 col-md-12 col-sm-12 all-production-wrapp" data-scrollreveal="enter bottom after 0s over 1s">
    <div class="container production-type">

        <?php if(!dynamic_sidebar()): ?>
            <?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('front-widget-top')?>
        <?php endif;?>

    </div>
</div>
<div class="col-xs-12 col-md-12 col-sm-12 section-field-page">
    <div class="container field-section" data-scrollreveal="enter right after 0s over 1s">
        <div class="col-xs-12 col-md-6 col-sm-6 page-item-block-left">
            <?php
            if($lang == 'ru') {
                $link_left = get_theme_mod('chemiko_link_1');
                $img_left = get_theme_mod('chemiko_img_1');
                $text_left = get_theme_mod('chemiko_text_1');
            }
            if($lang == 'ukr') {
                $link_left = get_theme_mod('chemiko_link_2');
                $img_left = get_theme_mod('chemiko_img_1');
                $text_left = get_theme_mod('chemiko_text_2');
            }
            if($lang == 'en') {
                $link_left = get_theme_mod('chemiko_link_3');
                $img_left = get_theme_mod('chemiko_img_1');
                $text_left = get_theme_mod('chemiko_text_3');
            }
            if($lang == 'cs') {
                $link_left = get_theme_mod('chemiko_link_4');
                $img_left = get_theme_mod('chemiko_img_1');
                $text_left = get_theme_mod('chemiko_text_4');
            }
            if(!empty($img_left)): ?>
                <a href="<?php echo $link_left; ?>"><img src="<?php echo $img_left?>"></a>
<?php if(!empty($text_left)):?>
            <div class="cat-box-item">
                <span class="cat-title"><?php echo $text_left;?></span>
            </div>
<?php endif;?>

            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-6 col-sm-6 page-item-block-right">
            <?php
            if($lang == 'ru') {
                $link_right = get_theme_mod('chemiko_link_5');
                $img_right = get_theme_mod('chemiko_img_2');
                $text_right = get_theme_mod('chemiko_text_5');
            }
            if($lang == 'ukr') {
                $link_right = get_theme_mod('chemiko_link_6');
                $img_right = get_theme_mod('chemiko_img_2');
                $text_right = get_theme_mod('chemiko_text_6');
            }
            if($lang == 'en') {
                $link_right = get_theme_mod('chemiko_link_7');
                $img_right = get_theme_mod('chemiko_img_2');
                $text_right = get_theme_mod('chemiko_text_7');
            }
            if($lang == 'cs') {
                $link_right = get_theme_mod('chemiko_link_8');
                $img_right = get_theme_mod('chemiko_img_2');
                $text_right = get_theme_mod('chemiko_text_8');
            }
            if(!empty($img_right)): ?>
                <a href="<?php echo $link_right; ?>"><img src="<?php echo $img_right; ?>"></a>
            <?php endif; ?>
            <?php if(!empty($text_right)):?>
                <div class="cat-box-item">
                    <span class="cat-title"><?php echo $text_right;?></span>
                </div>
            <?php endif;?></div>
    </div>
</div>
