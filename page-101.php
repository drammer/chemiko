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
    <main id="main" class="site-main container" role="main">

                        <header>
                        <div class="col-xs-12 col-md-7 col-sm-12 col-md-offset-5 title-catalog-parent">
                            <a href="http://751742.serawww2.web.hosting-test.net/wp-content/uploads/2016/01/katalog_16_01_16.pdf">Смотреть в формате PDF</a>
                        </div>
                    </header>

        <?php if ( have_posts() ) : ?>

                <?php
                // Start the loop.

                $term = get_terms('catalog', 'orderby=count&hide_empty=0&parent=0'); // данные элемента текущей таксономии
                // ID храниться тут

            for($k=0; $k< count($term); $k++){
                $term_id = $term[$k]->term_id;
                $child_terms = get_terms('catalog', 'orderby=count&hide_empty=0&parent='.$term_id);
            if(!empty($child_terms)):

                    $products = get_posts( array(
                        'posts_per_page' => -1,
                        'post_type' => 'products',
                        'tax_query' => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'catalog',
                                'terms' => $term[$k]->slug,
                                'field' => 'slug',
                                'operator' => 'IN',
                            )
                        ),
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_key' => 'rang_in_catalog',
                        'caller_get_posts'=> 1,

                    ) ); ?>

                    <?php

                    foreach ($products as $product ) {
                        ?>

                        <!-- item-block -->
                        <div class="post catalogs-block-wrapp col-xs-12 col-md-4 col-sm-6">
                        <div class="catalogs-block">
                            <?php $id = $product->ID;?>

                            <div class="col-md-12 col-sm-12 col-xs-12 thumbnail-cat-prev">
                                <a href="<?php echo get_permalink( $id ); ?>">
                                    <div class="wrapp-catalog-img">
                                        <?php
                                        //if ( has_post_thumbnail() ) {
                                            echo remove_img_attribute( get_the_post_thumbnail($id, 'medium', 'class=large-category') );
                                        //}
                                        ?>
                                    </div>
                                </a>
                            </div>
                            <div class="product-desc"><span><a href="<?php echo get_permalink( $id ); ?>" rel="bookmark" title="<?php echo get_the_title($id); ?>"><?php echo get_the_title($id); ?><!--i class="fa fa-caret-right"></i--></a></div>
                            <!--                                <div class="col-md-12 col-xs-12 col-sm-12 prev-news-content">-->
                            <!--                                    <p>--><?php // $content = $products->post_content; print wp_trim_words(trim(strip_tags($content)), 30, '...  </p> <a href="'.get_permalink().'" class="more-link" >читать далее</a>'); ?>
                            <!--                                </div>-->
                            <div class="clearfix"></div>
                        </div>
                        </div>
                        <!-- /item-block -->
                    <?php //} ?>

                <?php  }//endforeach;
            else:


                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'catalog', 'products' );

                    // End the loop.
                endwhile;
            endif;
        }

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>
<!--</div>-->
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
