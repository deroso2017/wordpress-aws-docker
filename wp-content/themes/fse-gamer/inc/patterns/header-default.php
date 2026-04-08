<?php 
/**
 * Default Header
 */
return array(
	'title'      => esc_html__( 'Default Header', 'fse-gamer' ),
	'categories' => array( 'fse-gamer', 'header' ),
	'content'    => '<!-- wp:group {"className":"menu-header","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"15px"}},"backgroundColor":"foreground"} -->
<div class="wp-block-columns has-foreground-background-color has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"className":"logo-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontFamily":"fse-gamer-teko"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:navigation {"textColor":"extra-secondary","overlayTextColor":"extra-primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize","fontSize":"20px"}},"fontFamily":"fse-gamer-teko","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Gallery","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"' . esc_url( FSE_GAMER_BUY_NOW ) . '","kind":"custom","className":"buy-now-button"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"><!-- wp:search {"label":"","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"align":"center","className":"search-box","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","className":"header-button","style":{"border":{"radius":"5px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"fontFamily":"fse-gamer-poppins"} -->
<div class="wp-block-button header-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-link-color has-fse-gamer-poppins-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-size:18px;font-style:normal;font-weight:600">Login / Signup</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);