<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function fse_gamer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Siteready Coming Soon Under Construction', 'fse-gamer' ),
			'slug'             => 'siteready-coming-soon-under-construction',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	fse_gamer_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fse_gamer_register_recommended_plugins' );