<?php
/**
 * Title: archive
 * Slug: wira-business/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"metadata":{"name":"Title Header"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-desk-computer-macbook-writing-typing-1067984-pxhere.webp","dimRatio":90,"isUserOverlayColor":true,"gradient":"custom-tertiary-overlay","className":"wirawp-section-resp","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"15px","right":"15px"}},"dimensions":{"aspectRatio":"auto"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover wirawp-section-resp" style="padding-top:100px;padding-right:15px;padding-bottom:100px;padding-left:15px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient has-custom-tertiary-overlay-gradient-background"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e('', 'wira-business');?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-desk-computer-macbook-writing-typing-1067984-pxhere.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"50px","left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"archive","showPrefix":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white","fontSize":"heading-xl"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"wirawp-mobile-hidden"} -->
<div class="wp-block-column wirawp-mobile-hidden" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog"},"className":"is-style-block-section","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"15px","right":"15px"},"blockGap":"35px"}},"backgroundColor":"custom-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-block-section has-custom-white-background-color has-background" style="padding-top:100px;padding-right:15px;padding-bottom:100px;padding-left:15px"><!-- wp:group {"style":{"spacing":{"blockGap":"35px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":35,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"is-style-box-shadow wirawp-relative","style":{"spacing":{"blockGap":"0px"},"border":{"radius":"30px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group is-style-box-shadow wirawp-relative" style="border-radius:30px"><!-- wp:group {"className":"wirawp-featured-style wirawp-z1","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group wirawp-featured-style wirawp-z1"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"20px","right":"20px"}},"border":{"radius":{"topRight":"30px","bottomLeft":"30px"}}},"backgroundColor":"custom-fourth","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-fourth-background-color has-background" style="border-top-right-radius:30px;border-bottom-left-radius:30px;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px"><!-- wp:post-date {"textColor":"custom-white","fontSize":"paragraph-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","bottom":"35px","left":"35px","right":"35px"},"blockGap":"25px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-heading"},":hover":{"color":{"text":"var:preset|color|custom-primary"}}}},"typography":{"textDecoration":"none"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"theme-1","fontSize":"heading-small"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","showMoreOnNewLine":false,"excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-transparent"},":hover":{"color":{"text":"var:preset|color|custom-transparent"}}}}},"textColor":"theme-2"} /--></div>
<!-- /wp:group -->

<!-- wp:read-more {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.4px","fontStyle":"normal","fontWeight":"600","fontSize":"13px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('Post not found', 'wira-business');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->