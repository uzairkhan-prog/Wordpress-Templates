<?php
/**
 * Title: Latest News
 * Slug: studies/latest-news
 * Categories: studies, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"className":"section-sub-heading","fontSize":"small"} -->
<h5 class="wp-block-heading section-sub-heading has-small-font-size"><strong><?php esc_html_e('FROM THE BLOG','studies'); ?></strong></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"heading","fontSize":"section-title"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-section-title-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e('We Want To Share Our Blog & Articles','studies'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":42,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"typography":{"fontSize":"20px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"0"}}},"backgroundColor":"white","className":"has-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-shadow has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} /-->

<!-- wp:post-excerpt {"textAlign":"center","excerptLength":15,"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"fontSize":"body-text"} /-->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"6px"},"top":{"color":"#4d658133","width":"1px"},"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#4d658133;border-top-width:1px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:6px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"extra-small"} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->