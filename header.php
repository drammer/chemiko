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

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php $logo_top = get_theme_mod('chemiko_top_logo'); if(isset($logo_top) || !empty($logo_top)): ?><a class="navbar-brand" href="<?php get_home_url(); ?>"><img src="<?php echo $logo_top; ?>"/></a><?php endif;?>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

            <?php echo wp_nav_menu( array(
                'menu'          => 'Top menu',
                'container'     => 'div',
                'menu_class'    => 'nav navbar-left nav-justified',
            ));?>
<div class="polylang-custom-block">
    <?php pll_custom_menu_flag(pll_the_languages($pll_lang), 'class="flag-lang"');?>
</div>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid all-content-wrapp">
