<?php 
/**
 * Header Inner Banner
 */
return array(
	'title'      => esc_html__( 'Inner Banner', 'fse-gamer' ),
	'categories' => array( 'fse-gamer', 'Inner Banner' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/banner1.jpg' ) ) .'","id":24,"dimRatio":40,"overlayColor":"extra-secondary","isUserOverlayColor":true,"focalPoint":{"x":0.54,"y":0.17},"minHeight":350,"minHeightUnit":"px","sizeSlug":"large","className":"banner-wrap inner-header-box","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover banner-wrap inner-header-box" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:350px"><img class="wp-block-cover__image-background wp-image-24 size-large" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/banner1.jpg' ) ) .'" style="object-position:54% 17%" data-object-fit="cover" data-object-position="54% 17%"/><span aria-hidden="true" class="wp-block-cover__background has-extra-secondary-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"60px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"fse-gamer-teko"} /--></div></div>
<!-- /wp:cover -->',
);