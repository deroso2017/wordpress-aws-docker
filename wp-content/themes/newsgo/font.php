<?php
/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/
function newsgo_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Inter:300,400,500,600,700,800,900|Roboto Condensed:400,500,700,800');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function newsgo_scripts_styles() {
    wp_enqueue_style( 'newsgo-fonts', newsgo_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'newsgo_scripts_styles' );