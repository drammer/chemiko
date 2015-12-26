<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 26.12.15
 * Time: 09:23
 */

function chemiko_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on twentyfifteen, use a find and replace
     * to change 'twentyfifteen' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'chemiko', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'chemiko' ),
        'social'  => __( 'Social Links Menu', 'chemiko' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );


    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
}
add_action( 'after_setup_theme', 'chemiko_setup' );


function chemiko_scripts() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'avesome-fonts', get_template_directory_uri() .'/css/font-awesome.min.css' , array(), null );

     // Load bootstrap stylesheet.
    wp_enqueue_style( 'chemiko-style-bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css', array(), '3.3.6' );

        // Load our main stylesheet.
    wp_enqueue_style( 'chemiko-style', get_template_directory_uri() . '/style.css', array(), '1.2' );

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style( 'chemiko-ie', get_template_directory_uri() . '/css/ie.css', array( 'chemiko-style' ), '20141010' );
    wp_style_add_data( 'chemiko-ie', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style( 'chemiko-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'chemiko-style' ), '20141010' );
    wp_style_add_data( 'chemiko-ie7', 'conditional', 'lt IE 8' );

    wp_enqueue_script( 'action-script', get_template_directory_uri() . '/js/action.js', array( 'jquery' ), '20150330', true );
    //load bootstrap js
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/dist/js/bootstrap.js', array( 'jquery' ), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'chemiko_scripts' );



function pll_custom_menu_flag($slug, $css_style=''){
    $arr_flag = array();
    foreach($slug as $key => $value):
            if($value['slug']=='cs'){
                echo '<img src="'.get_stylesheet_directory_uri().'/images/flag_cs.png" '. $css_style .' />';
            }
            if($value['slug']=='en'){
                echo '<img src="'.get_stylesheet_directory_uri().'/images/flag_en.png" '. $css_style .' />';
            }
            if($value['slug']=='ukr'){
                echo '<img src="'.get_stylesheet_directory_uri().'/images/flag_ukr.png" '. $css_style .' />';
            }
            if($value['slug']=='ru'){
                echo '<img src="'.get_stylesheet_directory_uri().'/images/flag_ru.png" '. $css_style .' />';
            }
    endforeach;
    return $arr_flag;
}