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
        'bottom'  => __( 'Bottom Menu', 'chemiko' ),
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
    wp_enqueue_script( 'smoothscroll-script', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '1.2', true );
    wp_enqueue_script( 'scrollreveal-script', get_template_directory_uri() . '/js/scrollReveal.js', array( 'jquery' ), '1.3', true );
}
add_action( 'wp_enqueue_scripts', 'chemiko_scripts' );



function pll_custom_menu_flag($slug, $css_style=''){
    $arr_flag = array();
    foreach($slug as $key => $value):
            if($value['slug']=='cs'){
                echo '<li><a href="'.$value['url'].'"><img src="'.get_stylesheet_directory_uri().'/images/flag_cs.png" '. $css_style .' /></a></li>';
            }
            if($value['slug']=='en'){
                echo '<li><a href="'.$value['url'].'"><img src="'.get_stylesheet_directory_uri().'/images/flag_en.png" '. $css_style .' /></a></li>';
            }
            if($value['slug']=='ukr'){
                echo '<li><a href="'.$value['url'].'"><img src="'.get_stylesheet_directory_uri().'/images/flag_ukr.png" '. $css_style .' /></a></li>';
            }
            if($value['slug']=='ru'){
                echo '<li><a href="'.$value['url'].'"><img src="'.get_stylesheet_directory_uri().'/images/flag_ru.png" '. $css_style .' /></a></li>';
            }
    endforeach;
    return $arr_flag;
}

function chemiko_customize_register($wp_customize){

    if(class_exists('WP_Customize_Panel')):

        $wp_customize->add_panel( 'panel_general', array(
            'priority' => 30,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Основные настройки сайта', 'chemiko' )
        ) );

        $wp_customize->add_section( 'chemiko_general_section' , array(
            'title'       => __( 'Лого, слоган, копирайт', 'chemiko' ),
            'priority'    => 30,
            'panel' => 'panel_general'
        ));

    /* LOGO */

    $wp_customize->add_setting( 'chemiko_top_logo', array('sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
            'label'    => __( 'Логотип сайта верхний левый', 'zerif-lite' ),
            'section'  => 'chemiko_general_section',
            'settings' => 'chemiko_top_logo',
            'priority'    => 1,
    )));
        $wp_customize->add_setting( 'chemiko_top_logo_2', array('sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo_2', array(
            'label'    => __( 'Логотип сайта верхний правый', 'zerif-lite' ),
            'section'  => 'chemiko_general_section',
            'settings' => 'chemiko_top_logo_2',
            'priority'    => 2,
    )));

    $wp_customize->add_setting('chemiko_top_slogan');
    $wp_customize->add_control('chemiko_top_slogan', array(
        'label'         => __('Слоган в верхней шапке', 'chemiko'),
        'section'       => 'chemiko_general_section',
        'setting'       => 'chemiko_top_slogan',
        'priority'      => 3
    ));

        $wp_customize->add_setting('chemiko_top_slogan_ukr');
    $wp_customize->add_control('chemiko_top_slogan_ukr', array(
        'label'         => __('Слоган в верхней шапке UKR', 'chemiko'),
        'section'       => 'chemiko_general_section',
        'setting'       => 'chemiko_top_slogan_ukr',
        'priority'      => 4
    ));

        $wp_customize->add_setting('chemiko_top_slogan_cs');
    $wp_customize->add_control('chemiko_top_slogan_cs', array(
        'label'         => __('Слоган в верхней шапке CZ', 'chemiko'),
        'section'       => 'chemiko_general_section',
        'setting'       => 'chemiko_top_slogan_cs',
        'priority'      => 5
    ));

        $wp_customize->add_setting('chemiko_top_slogan_eng');
    $wp_customize->add_control('chemiko_top_slogan_eng', array(
        'label'         => __('Слоган в верхней шапке ENG', 'chemiko'),
        'section'       => 'chemiko_general_section',
        'setting'       => 'chemiko_top_slogan_eng',
        'priority'      => 6
    ));
    $wp_customize->add_setting('chemiko_top_img', array('sanitize_callback' => 'esc_url_raw'));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'chemiko_top_img', array(
            'label'         => __('Картинка в верхний блок слогана', 'chemiko'),
            'section'       => 'chemiko_general_section',
            'setting'      => 'chemiko_top_img',
            'priority'      => 7,
        )));

        $wp_customize->add_setting( 'chemiko_logo_bottom', array('sanitize_callback' => 'esc_url_raw'));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chemiko_logo_bottom', array(
            'label'    => __( 'Логотип сайта нижний', 'chemiko' ),
            'section'  => 'chemiko_general_section',
            'settings' => 'chemiko_logo_bottom',
            'priority'    => 8,
        )));
        $wp_customize->add_setting( 'chemiko_logo_bottom_2', array('sanitize_callback' => 'esc_url_raw'));
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chemiko_logo_bottom_2', array(
            'label'    => __( 'Логотип сайта нижний левый', 'chemiko' ),
            'section'  => 'chemiko_general_section',
            'settings' => 'chemiko_logo_bottom_2',
            'priority'    => 8,
        )));


        $wp_customize->add_panel( 'field_panel_general', array(
            'priority' => 31,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Дополнительные поля', 'chemiko' )
        ) );

        $wp_customize->add_section( 'chemiko_field_section' , array(
            'title'       => __( 'Секция ссылок на дополнительные страницы', 'chemiko' ),
            'priority'    => 30,
            'panel' => 'field_panel_general'
        ));

    /* NEW FIELD IMG */

    $wp_customize->add_setting( 'chemiko_img_1', array('sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chemiko_img_1', array(
            'label'    => __( 'Картинка для левого блока ', 'chemiko' ),
            'section'  => 'chemiko_field_section',
            'settings' => 'chemiko_img_1',
            'priority'    => 1,
    )));

    $wp_customize->add_setting('chemiko_text_1');
    $wp_customize->add_control('chemiko_text_1', array(
        'label'         => __('Подпись для левого блока', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_1',
        'priority'      => 2
    ));
        $wp_customize->add_setting('chemiko_link_1');
    $wp_customize->add_control('chemiko_link_1', array(
        'label'         => __('Линк на страничку для левого блока', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_1',
        'priority'      => 3
    ));
        $wp_customize->add_setting('chemiko_text_2');
    $wp_customize->add_control('chemiko_text_2', array(
        'label'         => __('Подпись для левого блока UKR', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_2',
        'priority'      => 4
    ));
        $wp_customize->add_setting('chemiko_link_2');
    $wp_customize->add_control('chemiko_link_2', array(
        'label'         => __('Линк на страничку для левого блока UKR', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_2',
        'priority'      => 5
    ));
        $wp_customize->add_setting('chemiko_text_3');
    $wp_customize->add_control('chemiko_text_3', array(
        'label'         => __('Подпись для левого блока EN', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_3',
        'priority'      => 6
    ));
        $wp_customize->add_setting('chemiko_link_3');
    $wp_customize->add_control('chemiko_link_3', array(
        'label'         => __('Линк на страничку для левого блока EN', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_3',
        'priority'      => 7
    ));
        $wp_customize->add_setting('chemiko_text_4');
    $wp_customize->add_control('chemiko_text_4', array(
        'label'         => __('Подпись для левого блока CZ', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_4',
        'priority'      => 8
    ));
        $wp_customize->add_setting('chemiko_link_4');
    $wp_customize->add_control('chemiko_link_4', array(
        'label'         => __('Линк на страничку для левого блока CZ', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_4',
        'priority'      => 8
    ));

     /* NEW FIELD 2 IMG*/

        $wp_customize->add_setting( 'chemiko_img_2', array('sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chemiko_img_2', array(
            'label'    => __( 'Картинка для правого блока ', 'chemiko' ),
            'section'  => 'chemiko_field_section',
            'settings' => 'chemiko_img_2',
            'priority'    => 9,
    )));

    $wp_customize->add_setting('chemiko_link_5');
    $wp_customize->add_control('chemiko_link_5', array(
        'label'         => __('Линк на страничку для правого блока RU', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_5',
        'priority'      => 10
    ));
        $wp_customize->add_setting('chemiko_text_5');
    $wp_customize->add_control('chemiko_text_5', array(
        'label'         => __('Подпись для правого блока RU', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_6',
        'priority'      => 11
    ));
        $wp_customize->add_setting('chemiko_link_6');
    $wp_customize->add_control('chemiko_link_6', array(
        'label'         => __('Линк на страничку для правого блока UKR', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_6',
        'priority'      => 12
    ));
        $wp_customize->add_setting('chemiko_text_6');
    $wp_customize->add_control('chemiko_text_6', array(
        'label'         => __('Подпись для правого блока UKR', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_6',
        'priority'      => 13
    ));
        $wp_customize->add_setting('chemiko_link_7');
    $wp_customize->add_control('chemiko_link_7', array(
        'label'         => __('Линк на страничку для правого блока EN', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_7',
        'priority'      => 14
    ));
        $wp_customize->add_setting('chemiko_text_7');
    $wp_customize->add_control('chemiko_text_7', array(
        'label'         => __('Подпись для правого блока EN', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_7',
        'priority'      => 15
    ));
        $wp_customize->add_setting('chemiko_link_8');
    $wp_customize->add_control('chemiko_link_8', array(
        'label'         => __('Линк на страничку для правого блока CZ', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_link_8',
        'priority'      => 16
    ));
        $wp_customize->add_setting('chemiko_text_8');
    $wp_customize->add_control('chemiko_text_8', array(
        'label'         => __('Подпись для правого блока CZ', 'chemiko'),
        'section'       => 'chemiko_field_section',
        'setting'       => 'chemiko_text_8',
        'priority'      => 17
    ));

        $wp_customize->add_panel( 'socials_panel_general', array(
            'priority' => 33,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Настройки соцсетей ', 'chemiko' )
        ) );

        $wp_customize->add_section( 'chemiko_socials_section' , array(
            'title'       => __( 'Настройки соцсетей подвала сайта', 'chemiko' ),
            'priority'    => 30,
            'panel' => 'socials_panel_general'
        ));
        $wp_customize->add_setting('chemiko_facebook');
        $wp_customize->add_control('chemiko_facebook', array(
            'label'         => __('Facebook', 'chemiko'),
            'section'       => 'chemiko_socials_section',
            'setting'       => 'chemiko_facebook',
            'priority'      => 1
        ));
        $wp_customize->add_setting('chemiko_instagramm');
        $wp_customize->add_control('chemiko_instagramm', array(
            'label'         => __('Instagramm', 'chemiko'),
            'section'       => 'chemiko_socials_section',
            'setting'       => 'chemiko_instagramm',
            'priority'      => 2
        ));
        $wp_customize->add_setting('chemiko_twitter');
        $wp_customize->add_control('chemiko_twitter', array(
            'label'         => __('Twitter', 'chemiko'),
            'section'       => 'chemiko_socials_section',
            'setting'       => 'chemiko_twitter',
            'priority'      => 3
        ));

endif;
}

add_action('customize_register', 'chemiko_customize_register' );

function lang_text($text, $lang){

switch($text) {
    case 'Подробнее':
        switch ($lang) {
            case 'ukr';
                return 'Докладніше';
            break;
            case 'ru';
                return $text;
            break;
            case 'en';
                return 'More';
            break;
            case 'cs';
                return 'více';
            break;
        }
    break;
}
}

function date_news($date, $time_variant = ''){
    /* $time_variant return format date
    "text_mon" return date in format 22 November
     *
    "number_mon" return date in format 22.10.2015
     * */
    $today = date('d.m.Y');
    $date_news = date('d.m.Y',strtotime($date) );
    $mon = array(1 => 'Января',2 => 'Февраля', 3 => 'Марта',4 => 'Апреля', 5 => 'Мая', 6=> 'Июня', 7 => 'Июля', 8 => 'Августа', 9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря',);
    $mon_one = array(1 => 'Январь',2 => 'Февраль', 3 => 'Март',4 => 'Апрель', 5 => 'Май', 6=> 'Июнь', 7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь',);

    if($time_variant == 'text_mon' ):

        if($today == $date_news) :
            return human_time_diff(get_the_time(date('U',strtotime($date) ) ), current_time('timestamp')) . ' назад';
        else:
            return date( 'd', strtotime($date) ) .' '. $mon[date( 'n', strtotime($date) )];
        endif;
    endif;

    if($time_variant == 'one_mon' ):

        if($today == $date_news) :
            return human_time_diff(get_the_time(date('U',strtotime($date) ) ), current_time('timestamp')) . ' назад';
        else:
            return $mon_one[date( 'n', strtotime($date) )].'-'. date( 'd', strtotime($date) ).'-'. date('Y', strtotime($date));
        endif;
    endif;

    if($time_variant == 'number_mon' ):

        if($today == $date_news) :
            return human_time_diff(get_the_time(date('U',strtotime($date) ) ), current_time('timestamp')) . ' назад';
        else:
            return $date_news;
        endif;
    endif;

    if($time_variant == 'numeric' ):

        return date( 'd.m.Y', strtotime($date) );

    endif;

    if($time_variant == 'big_test_mon' ):
        return date( 'd', strtotime($date) ) .' '. $mon[date( 'n', strtotime($date) )] .' '. date( 'Y', strtotime($date) );
    endif;
}

// FOR WIDGETS REGIONS

function register_chemiko_widgets(){
    register_sidebar(
        array(
            'name'          => __( 'Средний сайдбар на главной', 'theme_text_domain' ),
            'id'            => 'front-widget-top',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<div class="widget-title test">',
            'after_title'   => '</div>' )
    );
}

add_action('widgets_init', 'register_chemiko_widgets');

function remove_img_attribute( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}