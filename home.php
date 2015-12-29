<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 26.12.15
 * Time: 11:50
 */?>
<?php get_header();?>
<?php if($lang=='ru') $slogan=get_theme_mod('chemiko_top_slogan');
if($lang=='ukr') $slogan=get_theme_mod('chemiko_top_slogan_ukr');
if($lang=='cs') $slogan=get_theme_mod('chemiko_top_slogan_cs');
if($lang=='en') $slogan=get_theme_mod('chemiko_top_slogan_eng');
$top_img_slogan = get_theme_mod('chemiko_top_img');
?>
<div class="jumbotron top-slogan-block">
    <div class="container slogan">
        <div class="slogan-wrapp col-md-6 col-xs-12 col-sm-6" data-scrollreveal="enter left after 0s over 1s">
            <?php if( !empty($slogan)  || isset($slogan)):?><h1 class="slogan"><?php echo $slogan; ?></h1><?php endif;?>
        </div>
        <div class="img-top-block col-md-6 col-xs-12 col-sm-6"><?php if( !empty($top_img_slogan) || isset($top_img_slogan)):?><img src="<?php echo $top_img_slogan;?>" data-scrollreveal="enter right after 0s over 1s" class="top_img_slogan img-responsive" /><?php endif; ?></div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_template_part('section/content','production'); ?>

<?php get_template_part('section/content','mail-block'); ?>
<div class="col-xs-12 bottom-block">
    <div class="col-xs-12 col-md-6 col-sm-12 new-product row" data-scrollreveal="enter bottom after 0s over 1s">
        <?php get_template_part('section/content','new-product'); ?>
    </div>
    <div class="col-xs-12 col-md-6 col-sm-12 news-block">
        <?php get_template_part('section/content','news'); ?>
    </div>

</div>

<?php get_footer();?>
