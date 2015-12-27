<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 26.12.15
 * Time: 11:50
 */?>
<?php get_header();?>
<div class="jumbotron top-slogan-block">
    <div class="container slogan">
<?php $slogan = get_theme_mod('chemiko_top_slogan'); if( empty($slogan)  || isset($slogan)):?>
        <h1 class="slogan"><?php echo $slogan; ?></h1>
        <?php endif;?>

    </div>
</div>
<?php get_footer();?>
