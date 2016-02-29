<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area content catalog-page">
    <?php
    $postID =  get_the_ID();
    $brands = get_the_terms($postID, 'brands');
    $term_id = $brands[0]->term_id;
    $cat_data = get_option("brands_".$term_id);

    ?>
    <main id="main" class="site-main container brand-product-<?=( !empty($term_id))? $term_id: 'all';?>" role="main">

        <?php if ( have_posts() ) : ?>

                <header>
                    <h1 class="product-title screen-reader-text"><?php echo get_the_title($postID); ?></h1>
                </header>
        <div class="product-page-single row">
            <div class="col-md-4 col-sm-4 col-xs-12 thumbnail-cat-prev-page">

                    <div class="wrapp-catalog-img-page" data-scrollreveal="enter left after 0s over 1s">
                        <?php
                       //                        if(!empty($cat_data['cat_img'])):?>
<!--                            <img src="--><?php //echo $cat_data['cat_img'];?><!--" class="img-brand-big" id="img-brand-big---><?php //echo $term_id; ?><!--">-->
<!--                        --><?php //endif;?>
                       <?php if ( has_post_thumbnail() ) {
                            echo remove_img_attribute( get_the_post_thumbnail($postID, 'large', 'class=img-responsive product-img') );
                        }
                        ?>
                    </div>

            </div>
            <?php
            $field = get_post_meta( get_the_ID() );
           // var_dump($field);
            function isJSON($string){
                if ( (is_string($string) && (is_object(json_decode($string)) || is_array(json_decode( $string ))))){
                    $arr_json = json_decode($string);
                    $stringVAL = '<table class="table-val"><tr>';
                    foreach ($arr_json as $key=>$value){
                        if(!empty($value)) {
                            $stringVAL .= '<td>' . $value . '</td>';
                        }
                    }
                    return $stringVAL .='</tr></table>';
                }else{
                    return $string;
                }

            }

            $description_product = $field['description_product'][0];
            $ingredients_product = $field['ingredients_product'][0];
            $ingredients_product_all = $field['ingredients_product_all'][0];
            $warning_product = $field['warning_product'][0];
            $type_product = $field['type_product'][0];
            $odor_product = $field['odor_product'][0];
            $extent_product = isJSON( $field['extent_product'][0] );
            $type_packaging_product = $field['type_packaging_product'][0];
            $cardboard_product = $field['cardboard_product'][0];
            $pallets_product = $field['pallets_product'][0];


            ?>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <?php $content = get_post( get_the_ID() ); echo $content->post_content;  ?>
                <div class="col-xs-12 product-extend-block">
                    <?php echo $extent_product; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 thubnail-text-prev">
                <?php   if(!empty($cat_data['cat_img'])):?>
                    <img src="<?php echo $cat_data['cat_img'];?>" class="img-brand-small hidden-xs" id="img-brand-<?php echo $term_id; ?>" data-scrollreveal="enter right after 0s over 1s">
                <?php endif; ?>
                <div class="list-group">


                    <?php if( !empty($description_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][0]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $description_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($ingredients_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][1]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $ingredients_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($ingredients_product_all)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][2]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $ingredients_product_all; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($warning_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][3]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $warning_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($type_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][4]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $type_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($odor_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][5]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $odor_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($extent_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][6]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $extent_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($type_packaging_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][7]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $type_packaging_product; ?></div>
                    <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($cardboard_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][8]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $cardboard_product; ?></div>
                        <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php if( !empty($pallets_product)):?>
                         <div class="col-xs-6 col-sm-6 col-md-4"><?php echo $arrayValue[ICL_LANGUAGE_CODE][9]; ?></div><div class="col-xs-6 col-sm-6 col-md-8"><?php echo $pallets_product; ?></div>
                        <div class="clearfix"></div>
                    <?php endif; ?>

                </div>
                <?php $list_alarm_ID = get_post_meta($postID, 'list_product_alarm', 1); if(!empty($list_alarm_ID)): $list_alarm = wp_get_attachment_url( $list_alarm_ID);?>
                <div class="col-xs-12 list-alarm" data-scrollreveal="enter bottom after 0s over 1s">
                    <a href="<?php echo $list_alarm; ?>" target="_blank">
                            <i class="fa fa-exclamation-circle"></i> <span><?php echo $arrayValue[ICL_LANGUAGE_CODE][10]; ?></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
            <?php



        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>

    </main><!-- .site-main -->
    <div class="clearfix"></div>
</div><!-- .content-area -->

<?php get_footer(); ?>
