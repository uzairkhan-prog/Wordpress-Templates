<?php
/**
 * Title: Blog Home Block
 * Slug: wira-business/blog-home-block
 * Categories: posts, wira_business_theme
 */
?>

<!-- wp:group {"metadata":{"name":"Blog Home"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"15px","right":"15px"},"blockGap":"35px"}},"backgroundColor":"custom-white","className":"is-style-block-section","layout":{"type":"constrained"}} -->
<div id="blog" class="wp-block-group is-style-block-section has-custom-white-background-color has-background" style="padding-top:100px;padding-right:15px;padding-bottom:100px;padding-left:15px"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Subheading"},"style":{"spacing":{"blockGap":"10px"},"elements":{"heading":{"color":{"text":"var:preset|color|custom-primary"}}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"custom-primary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-custom-primary-color has-alpha-channel-opacity has-custom-primary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"}}}},"textColor":"custom-primary","className":"is-style-subheading"} -->
<h2 class="wp-block-heading is-style-subheading has-custom-primary-color has-text-color has-link-color"><?php esc_html_e('Our Blog', 'wira-business');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"heading-l"} -->
<h3 class="wp-block-heading has-text-align-center has-heading-l-font-size"><?php esc_html_e('Discover Our Blog Insight &amp; Latest News Content.', 'wira-business');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":35,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"border":{"radius":"30px"}},"className":"is-style-box-shadow wirawp-relative","layout":{"inherit":false}} -->
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
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->