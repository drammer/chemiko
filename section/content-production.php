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
        <div class="col-xs-12 title-block">Типы продукции</div>
        <div class="col-xs-12 col-sm-6 col-md-6 block-left">
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/block-left-icon.png">

            <div class="cat-box-item">
                    <span class="cat-title">Для стирки</span>
                <ul class="category-box">
                    <li class="iten-category"><a href="#">Средства для стирки / сыпучие /</a></li>
                    <li class="iten-category"><a href="#">Средство для стирки / гели /</a></li>
                    <li class="iten-category"><a href="#">Средства и смягчители /ополаскиватели /</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 block-right">
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/block-right-icon.png">
            <div class="cat-box-item">
                <span class="cat-title">Для дома</span>
                <ul class="category-box">
                    <li class="iten-category"><a href="#">Средства для стирки / сыпучие /</a></li>
                    <li class="iten-category"><a href="#">Средство для стирки / гели /</a></li>
                    <li class="iten-category"><a href="#">Средства и смягчители /ополаскиватели /</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 col-md-12 col-sm-12 section-field-page">
    <div class="container field-section" data-scrollreveal="enter right after 0s over 1s">
        <div class="col-xs-12 col-md-6 col-sm-6 page-item-block-left">
            <?php
           $link_left = get_theme_mod('chemiko_link_1');
           $img_left = get_theme_mod('chemiko_img_1');
           $text_left = get_theme_mod('chemiko_text_1');
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
            $link_right = get_theme_mod('chemiko_link_2');
            $img_right = get_theme_mod('chemiko_img_2');
            $text_right = get_theme_mod('chemiko_text_2');
            if(!empty($img_right) || isset($img_right)): ?>
                <a href="<?php echo $link_right; ?>"><img src="<?php echo $img_right; ?>"></a>
            <?php endif; ?>
            <?php if(!empty($text_right)):?>
                <div class="cat-box-item">
                    <span class="cat-title"><?php echo $text_right;?></span>
                </div>
            <?php endif;?></div>
    </div>
</div>
