<?php   
/**
 * Block Patterns
 *
 * @package FSE Gamer
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function fse_gamer_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-gamer' => array( 'label' => esc_html__( 'FSE Gamer Patterns', 'fse-gamer' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'fse-gamer' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_gamer_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-default',
		'header-banner',
		'trending-game-section',
		'services-section',
		'latest-blog',
		'post-one-column',
		'post-two-column',
		'inner-banner',
		'hidden-404',
		'sidebar',
		'footer-default',
	);

	$block_patterns = apply_filters( 'fse_gamer_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'fse-gamer/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'fse_gamer_register_block_patterns', 9 );