<?php
/**
 * FSE Gamer functions and definitions
 *
 * @package FSE Gamer
 * @since 1.0
 */

if ( ! function_exists( 'fse_gamer_support' ) ) :
	function fse_gamer_support() {
		
		load_theme_textdomain( 'fse-gamer', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'fse_gamer_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('FSE_GAMER_BUY_NOW',__('https://www.themescarts.com/products/games-store-wordpress-theme/','fse-gamer'));
		define('FSE_GAMER_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/fse-gamer/','fse-gamer'));
		define('FSE_GAMER_BUNDLE_LINK',__('https://www.themescarts.com/products/wordpress-theme-bundle/','fse-gamer'));

	}
endif;
add_action( 'after_setup_theme', 'fse_gamer_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'fse_gamer_styles' ) ) :
	function fse_gamer_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('fse-gamer-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('owl-carousel-css', get_template_directory_uri(). '/assets/css/owl.carousel.css');
		wp_enqueue_style('fse-gamer-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('fse-gamer-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
		wp_style_add_data( 'fse-gamer-basic-style', 'rtl', 'replace' );

		wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'fse-gamer-custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
		
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );

		wp_enqueue_style( 'dashicons' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'fse_gamer_styles' );

function fse_gamer_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('fse-gamer-welcome-notice', get_template_directory_uri() . '/inc/fse-gamer-theme-info-page/js/fse-gamer-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('fse-gamer-welcome-notice', 'fse_gamer_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('fse_gamer_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('fse_gamer_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=fse-gamer-theme-info-page')
    ));
}
add_action('admin_enqueue_scripts', 'fse_gamer_enqueue_admin_script');

if (!function_exists('fse_gamer_enable_plugin_autoupdate')) {

    add_filter('auto_update_plugin', function ($update, $item) {
        if ($item->slug === 'siteready-coming-soon-under-construction') {
            return true;
        }
        return $update;
    }, 10, 2);

}

function fse_gamer_plugin_update_available($slug, $file) {
    $updates = get_site_transient('update_plugins');

    if (!isset($updates->response[$slug . '/' . $file])) {
        return false; // No update available
    }

    return $updates->response[$slug . '/' . $file];
}

require get_template_directory() .'/inc/TGM/tgm.php';

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

require_once get_theme_file_path( 'inc/fse-gamer-theme-info-page/templates/class-theme-notice.php' );
require_once get_theme_file_path( 'inc/fse-gamer-theme-info-page/class-theme-info.php' );

require_once get_theme_file_path( '/inc/customizer.php' );	

?>