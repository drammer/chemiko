<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 26.12.15
 * Time: 09:24
 */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri()?>/images/favicon.ico" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
<?php $pll_lang = array(
    'raw'=>1,
);?>

<div class="right-social-icon socials-fix hidden-xs">
    <?php
    $facebook = get_theme_mod('chemiko_facebook');
    $instagramm = get_theme_mod('chemiko_instagramm');
    $twitter = get_theme_mod('chemiko_twitter');
    if(!empty($facebook) || isset($facebook)): ?>
        <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-official"></i></a>
    <?php endif; if(!empty($instagramm) || isset($instagramm)): ?>
        <a href="<?php echo $instagramm; ?>"><i class="fa fa-instagram"></i></a>
    <?php endif; if(!empty($twitter) || isset($twitter)): ?>
        <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter-square"></i></a>
    <?php endif; ?>
</div>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php $logo_top = get_theme_mod('chemiko_top_logo'); if(isset($logo_top) || !empty($logo_top)): ?><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $logo_top; ?>"/></a><?php endif;?>
            <a href="/" class="home-link">Главная</a>

            <?php $logo_top = get_theme_mod('chemiko_top_logo_2'); if(isset($logo_top) || !empty($logo_top)): ?><a class="navbar-brand t-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $logo_top; ?>"/></a><?php endif;?>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <?php echo wp_nav_menu( array(
                'menu'          => 'Top menu',
                'container'     => 'div',
                'menu_class'    => 'nav navbar-left nav-justified',
            ));?>

    <ul class="nav navbar-nav navbar-right polylang-custom-block">
        <?php pll_custom_menu_flag(pll_the_languages($pll_lang), 'class="flag-lang"');?>
    </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>
<?php
if( is_single() ){

$postID =  get_the_ID(); $bg_product_id = get_post_meta($postID, 'product_bg', 1); $image_attributes = wp_get_attachment_url( $bg_product_id); }; ?>

<div class="container-fluid all-content-wrapp <?=(is_front_page()) ? 'no-bg': ''; ?>" <?=( !empty($image_attributes) ) ? 'style=" background: url(' . $image_attributes .') repeat; " ' : ''; ?>>
