<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 26.12.15
 * Time: 09:23
 */?>

<div class="clearfix"></div>

<footer id="colophon" class="footer" role="contentinfo">
    <div class="container">
        <div class="col-xs-12 col-sm-2 col-md-2">
            <?php $logo_bottom = get_theme_mod('chemiko_logo_bottom_2'); ?>
<?php if(!empty($logo_bottom) || isset($logo_bottom)):?>
                <a href="<?php esc_url(home_url('/')); ?>"><img src="<?php echo $logo_bottom; ?>" class="logo-bottom"></a>
            <?php endif;?>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 wrapp-navbar-bottom">
            <div id="navbar" class="collapse navbar-collapse">

                <?php echo wp_nav_menu( array(
                    'menu'          => 'Bottom Menu',
                    'container'     => 'div',
                    'menu_class'    => 'nav navbar-nav',
                ));?>
                <div class="bottom-social-icon socials-footer-box">
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
            </div><!--/.nav-collapse -->
        </div>
        <div class="col-xs-12 col-md-2 col-sm-2 ">
            <div class="col-xs-12 logo-bottom-2">
                <?php $logo_bottom = get_theme_mod('chemiko_logo_bottom'); ?>
                <?php if(!empty($logo_bottom) || isset($logo_bottom)):?>
                    <a href="<?php esc_url(home_url('/')); ?>"><img src="<?php echo $logo_bottom; ?>" class="logo-bottom"></a>
                <?php endif;?>
            </div>
        </div>
        <span class="allrights">© 2015 All rights reserved</span>
    </div>
    <div class="site-info">
        <?php
        /**
         * Fires before the Twenty Fifteen footer text for footer customization.
         *
         * @since Twenty Fifteen 1.0
         */
        ?>
    </div><!-- .site-info -->
</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
