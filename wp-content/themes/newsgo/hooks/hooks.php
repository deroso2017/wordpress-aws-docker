<?php

if (!function_exists('newsgo_banner_trending_posts')):
    /**
     *
     * @since NewsGo 1.0.0
     *
     */
    function newsgo_banner_trending_posts() { ?>
        <div class="col-md-4">
            <div class="trending-posts small-list-post">
            <?php
            if (is_front_page() || is_home()) {
                $number_of_posts = '3';
                $newsup_slider_category = newsup_get_option('select_trending_news_category');
                $newsup_all_posts_main = newsup_get_posts($number_of_posts, $newsup_slider_category);
                if ($newsup_all_posts_main->have_posts()) :
                    while ($newsup_all_posts_main->have_posts()) : $newsup_all_posts_main->the_post();
                    global $post;
                    $url = newsup_get_freatured_image_url($post->ID, 'newsup-slider-full');
                    ?>                 
                    <div class="small-post clearfix">
                        <?php if (!empty($url)): ?>
                            <div class="img-small-post">
                                <img src="<?php echo esc_url($url); ?>" alt="<?php the_title(); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="small-post-content">
                            <div class="title_small_post">
                                <h5 class="title">
                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            }
            ?>
            </div>
        </div>
        <?php 
    }
endif;

add_action('newsgo_action_banner_trending_posts', 'newsgo_banner_trending_posts', 10);

//Front Page Banner
if (!function_exists('newsgo_front_page_banner_section')) :
    /**
     *
     * @since Newsup
     *
     */
    function newsgo_front_page_banner_section() {
        if (is_front_page() || is_home()) {
           
            $newsup_enable_main_slider = newsup_get_option('show_main_news_section');
            $select_vertical_slider_news_category = newsup_get_option('select_vertical_slider_news_category');
            $vertical_slider_number_of_slides = newsup_get_option('vertical_slider_number_of_slides');
            $all_posts_vertical = newsup_get_posts($vertical_slider_number_of_slides, $select_vertical_slider_news_category);
            if ($newsup_enable_main_slider):  

                $main_banner_section_background_image = newsup_get_option('main_banner_section_background_image');
                $main_banner_section_background_image_url = wp_get_attachment_image_src($main_banner_section_background_image, 'full');
                if(!empty($main_banner_section_background_image)){ ?>
                    <section class="mg-fea-area over" style="background-image:url('<?php echo esc_url($main_banner_section_background_image_url[0]); ?>');">
                <?php }else{ ?>
                    <section class="mg-fea-area">
                <?php  } ?>
                    <div class="overlay">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="homemain"class="homemain owl-carousel"> 
                                        <?php newsup_get_block('list', 'banner'); ?>
                                    </div>
                                </div>
                                <?php do_action('newsgo_action_banner_trending_posts'); ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!--==/ Home Slider ==-->
            <?php endif; ?>
            <!-- end slider-section -->
        <?php }
    }
endif;
add_action('newsgo_action_front_page_main_section_1', 'newsgo_front_page_banner_section', 40);

if (!function_exists('newsgo_header_search_section')) :
/**
 *  Search
 *
 * @since Newsup
 *
 */
function newsgo_header_search_section() { 
    $header_search_enable = get_theme_mod('header_search_enable','true');
    if($header_search_enable == true) {
    ?>
    <div class="dropdown show mg-search-box pr-2">
        <a class="dropdown-toggle msearch ml-auto" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search"></i>
        </a>
        <div class="dropdown-menu searchinner" aria-labelledby="dropdownMenuLink">
            <?php get_search_form(); ?>
        </div>
    </div>
    <?php } 
}
endif;
add_action('newsgo_action_header_search_section', 'newsgo_header_search_section', 5);

if (!function_exists('newsgo_header_subscribe_section')) :
    /**
     *  Subscribe
     *
     * @since Newsup
     *
     */
    function newsgo_header_subscribe_section() { 
        $header_subsc_enable = get_theme_mod('header_subsc_enable','true');
        $subsc_target = get_theme_mod('newsup_subsc_link_target','true');
        $newsup_subsc_link = get_theme_mod('newsup_subsc_link','#');
        if($header_subsc_enable == true) {
        ?>
          <a href="<?php echo esc_url($newsup_subsc_link); ?>" <?php if($subsc_target) { ?> target="_blank" <?php } ?>  class="btn-bell btn-theme ml-2">
            <i class="fa fa-bell"></i>
        </a>
      <?php }
    }
endif;
add_action('newsgo_action_header_subscribe_section', 'newsgo_header_subscribe_section', 5); 

if (!function_exists('newsgo_content_layouts')) :
    function newsgo_content_layouts() { 
        $newsup_content_layout = esc_attr(get_theme_mod('newsup_content_layout','grid-right-sidebar'));

        if($newsup_content_layout == "align-content-right" || $newsup_content_layout == "align-content-left"){ ?>
            <div class="col-md-8">
                <?php get_template_part('content',''); ?>
            </div>
        <?php } elseif($newsup_content_layout == "full-width-content") { ?>
            <div class="col-md-12">
                <?php get_template_part('content',''); ?>
            </div>
        <?php }  if($newsup_content_layout == "grid-left-sidebar" || $newsup_content_layout == "grid-right-sidebar"){ ?>
            <div class="col-md-8">
                <?php get_template_part('content','grid'); ?>
            </div>
        <?php } elseif($newsup_content_layout == "grid-fullwidth") { ?>
            <div class="col-md-12">
                <?php get_template_part('content','grid'); ?>
            </div>
        <?php } 
    }
endif;
add_action('newsgo_action_content_layouts', 'newsgo_content_layouts', 4);


if (!function_exists('newsgo_main_content_layouts')) :
    function newsgo_main_content_layouts() { 
        $newsup_content_layout = esc_attr(get_theme_mod('newsup_content_layout','grid-right-sidebar'));

        if($newsup_content_layout == "align-content-left" || $newsup_content_layout == "grid-left-sidebar" ){ ?>
            <aside class="col-md-4 sidebar-sticky">
                <?php get_sidebar();?>
            </aside>
        <?php } ?>
        <?php do_action('newsgo_action_content_layouts'); ?>
        <?php if($newsup_content_layout == "align-content-right" || $newsup_content_layout == "grid-right-sidebar")  { ?>
            <aside class="col-md-4 sidebar-sticky">
                <?php get_sidebar();?>
            </aside>
        <?php }
    }
endif;
add_action('newsgo_action_main_content_layouts', 'newsgo_main_content_layouts', 40);

if (!function_exists('newsgo_main_grid_content')) :
    function newsgo_main_grid_content() {
        global $post;
        while(have_posts()){ the_post();  
            $newsup_content_layout = esc_attr(get_theme_mod('newsup_content_layout','grid-right-sidebar')); ?>
            <div id="post-<?php the_ID(); ?>" <?php if($newsup_content_layout == "grid-fullwidth") { echo post_class('col-lg-4 col-md-6'); } else { echo post_class('col-md-6'); } ?>>
            <!-- mg-posts-sec mg-posts-modul-6 -->
                <div class="mg-blog-post-box"> 
                    <?php newsup_post_image_display_type($post); ?>
                    <article class="small">
                        <?php newsup_post_categories(); ?> 
                        <h4 class="entry-title title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>  
                        <?php $newsup_excerpt = newsup_the_excerpt( absint( 20 ) );
                            if ( !empty( $newsup_excerpt ) ) { echo wp_kses_post( wpautop( $newsup_excerpt ) ); } ?>
                            <?php newsup_post_meta(); ?>
                    </article>
                </div>
            </div>
        <?php }  newsup_page_pagination();
    }
endif;
add_action('newsgo_action_main_grid_content', 'newsgo_main_grid_content', 4);