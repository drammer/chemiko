<?php
/**
 * Created by PhpStorm.
 * User: drammer
 * Date: 29.12.15
 * Time: 20:08
 */
?>
<?php ?>
<?php $arrgs = array ( 'category_name' => 'novosty' , 'posts_per_page' => 2, 'orderby' =>'post_date', 'language'=>$lang, 'order' => DESC, 'limit'=> 2);
$query = new WP_Query;
$news = $query->query($arrgs);

if(!empty($news)):

    if( 'ru' == pll_current_language() ) :
        $cat_name = "Новости";
    endif;
    if( 'ukr' == pll_current_language() ) :
        $cat_name = "Новини";
    endif;
    if( 'sc' == pll_current_language() ) :
        $cat_name = "Zprávy";
    endif;
    if( 'en' == pll_current_language() ) :
        $cat_name = "News";
    endif;
?>
<span class="block-title" data-scrollreveal="enter right after 0s over 1s"><?=$cat_name;?></span>

<?php foreach($news as $item):?>
    <div class="media" data-scrollreveal="enter bottom after 0s over 1s">
        <div class="media-left media-middle">
            <a href="<?=get_permalink($item->ID)?>" class="media-href">
                <?php echo get_the_post_thumbnail($item->ID, 'thumbnail', 'class=media-object');?>
            </a>
        </div>
        <div class="media-body">

            <a href="<?=get_permalink($item->ID)?>"><h4 class="media-heading"><?php echo $item->post_title; ?></h4></a>
            <span class="media-time-news"><?php echo date_news($item->post_date, 'numeric'); ?></span>
            <p class="media-text"><?php echo wp_trim_words($item->post_content, 25); ?></p>
            <a href="<?=get_permalink($item->ID)?>" class="media-moore"><?=lang_text('Подробнее', $lang);?></a>
        </div>
    </div>
<?php endforeach;?>

<?php endif;?>
