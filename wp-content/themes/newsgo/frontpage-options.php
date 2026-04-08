<?php

/**
 * Option Panel
 *
 * @package NewsGo
 */


function newsgo_customize_register($wp_customize) {

    $newsup_default = newsgo_get_default_theme_options();

    $wp_customize->remove_control('newsup_select_slider_setting');
    $wp_customize->remove_control('popular_tab_title');
    $wp_customize->remove_control('newsup_center_logo_title');
    $wp_customize->remove_control('tabbed_section_title');
    $wp_customize->remove_control('latest_tab_title');
    $wp_customize->remove_control('trending_tab_title');
    // $wp_customize->remove_control('select_trending_tab_news_category');

    $wp_customize->remove_section('newsup_popular_tags_section_settings');

    $wp_customize->get_setting('newsup_title_font_size')->default  = '46'; 
    $wp_customize->get_setting('newsup_header_overlay_color')->default  = '#fff';
	$wp_customize->get_setting('header_textcolor')->default = '1a365d';
	$wp_customize->get_setting('newsup_content_layout')->default = 'grid-right-sidebar';



    //section title
    $wp_customize->add_setting('trending_post_section_title',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        new newsup_Section_Title(
            $wp_customize,
            'trending_post_section_title',
            array(
                'label'             => esc_html__( 'Trending Post Section', 'newsgo' ),
                'section'           => 'frontpage_main_banner_section_settings',
                'priority'          => 80,
                'active_callback' => 'newsup_main_banner_section_status'
            )
        )
    );
}
add_action('customize_register', 'newsgo_customize_register');
