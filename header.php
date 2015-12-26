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

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

            <?php echo wp_nav_menu( array(
                'menu'          => 'Top menu',
                'container'     => 'div',
                'menu_class'    => 'nav navbar-nav ',
            ));?>
<div class="polylang-custom-block">
    <?php pll_custom_menu_flag(pll_the_languages($pll_lang), 'class="flag-lang"');?>
</div>

<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="#">Home</a></li>-->
<!--                <li><a href="#about">About</a></li>-->
<!--                <li><a href="#contact">Contact</a></li>-->
<!--            </ul>-->
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
