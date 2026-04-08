<?php
/**
 * Latest Blogs
 */
return array(
	'title'      => esc_html__( 'Latest Blogs', 'fse-gamer' ),
	'categories' => array( 'fse-gamer', 'Latest Blogs' ),
	'content'    => '<!-- wp:group {"className":"site-blog-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group site-blog-box"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontFamily":"fse-gamer-poppins"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-fse-gamer-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:500">Our Features</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"wow fadeInUp","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"40px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontFamily":"fse-gamer-teko"} -->
<h2 class="wp-block-heading has-text-align-center wow fadeInUp has-black-color has-text-color has-link-color has-fse-gamer-teko-font-family" style="font-size:40px;font-style:normal;font-weight:600">Latest Gaming News and Articles</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":59,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"className":"blog-area","layout":{"type":"default"}} -->
<div class="wp-block-query blog-area"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"post-main-area wow fadeInUp","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"foreground","layout":{"inherit":false}} -->
<div class="wp-block-group post-main-area wow fadeInUp has-foreground-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"25px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"fse-gamer-teko"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"#747474"}}},"color":{"text":"#747474"},"typography":{"fontSize":"16px"}},"fontFamily":"fse-gamer-poppins"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"date-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"5px"}},"backgroundColor":"background","textColor":"foreground","fontFamily":"fse-gamer-poppins"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);