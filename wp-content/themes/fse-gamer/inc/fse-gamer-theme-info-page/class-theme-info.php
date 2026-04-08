<?php
/**
 * Theme Info Page
 *
 * @package FSE Gamer
 */

function fse_gamer_theme_details() {
	add_theme_page( 'Themes', 'FSE Gamer Theme', 'edit_theme_options', 'fse-gamer-theme-info-page', 'theme_details_display', null );
}
add_action( 'admin_menu', 'fse_gamer_theme_details' );

function theme_details_display() {

	include_once 'templates/theme-details.php';

}

add_action( 'admin_enqueue_scripts', 'fse_gamer_theme_details_style' );

function fse_gamer_theme_details_style() {
    wp_register_style( 'fse_gamer_theme_details_css', get_template_directory_uri() . '/inc/fse-gamer-theme-info-page/css/theme-details.css', false, '1.0.0' );
    wp_enqueue_style( 'fse_gamer_theme_details_css' );
}