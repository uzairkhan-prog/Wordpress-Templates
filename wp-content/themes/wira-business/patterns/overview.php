<?php
/**
 * Title: Overview Block
 * Slug: wira-business/overview-block
 * Categories: about, wira_business_theme
 */
?>

<!-- wp:group {"metadata":{"name":"Overview"},"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"15px","right":"15px"},"blockGap":"35px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-white-overlay"}},"heading":{"color":{"text":"var:preset|color|custom-white"}}}},"backgroundColor":"custom-tertiary","textColor":"custom-white-overlay","className":"is-style-block-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-block-section has-custom-white-overlay-color has-custom-tertiary-background-color has-text-color has-background has-link-color" style="padding-top:100px;padding-right:15px;padding-bottom:100px;padding-left:15px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"60px"}}},"className":"is-style-columns-reverse"} -->
<div class="wp-block-columns is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"30px"}},"className":"wirawp-spacing-ptb-3"} -->
<div class="wp-block-column is-vertically-aligned-center wirawp-spacing-ptb-3"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Subheading"},"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"custom-fourth","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-custom-fourth-color has-alpha-channel-opacity has-custom-fourth-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-fourth"}}}},"textColor":"custom-fourth","className":"is-style-subheading"} -->
<h2 class="wp-block-heading is-style-subheading has-custom-fourth-color has-text-color has-link-color"><?php esc_html_e('We\'re Professionals', 'wira-business');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"heading-l"} -->
<h3 class="wp-block-heading has-heading-l-font-size"><?php esc_html_e('Our consultants have years of experience working with businesses of all sizes.', 'wira-business');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"60px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"25px"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"},"border":{"radius":"30px"}},"backgroundColor":"custom-white-10","className":"wirawp-box-big","layout":{"type":"constrained"}} -->
<div class="wp-block-group wirawp-box-big has-custom-white-10-background-color has-background" style="border-radius:30px"><!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'wira-business');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'wira-business');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"7px","padding":{"left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:30px"><!-- wp:heading {"textAlign":"left","level":5,"fontSize":"heading-small"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-small-font-size"><?php esc_html_e('Corporate Business', 'wira-business');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur.', 'wira-business');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"7px","padding":{"left":"30px"}},"border":{"left":{"color":"var:preset|color|custom-fourth","width":"5px"},"top":[],"right":[],"bottom":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--custom-fourth);border-left-width:5px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":5,"fontSize":"heading-small"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-small-font-size"><?php esc_html_e('Clients Satisfying', 'wira-business');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur.', 'wira-business');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"7px","padding":{"left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:30px"><!-- wp:heading {"textAlign":"left","level":5,"fontSize":"heading-small"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-small-font-size"><?php esc_html_e('More Than Business Theme', 'wira-business');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur.', 'wira-business');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/action-african-american-african-descent-agreement-american-black-1452903-pxhere.webp","dimRatio":50,"overlayColor":"custom-transparent","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","isDark":false,"style":{"border":{"radius":"30px"}},"className":"is-style-cover-mobile-3","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light is-style-cover-mobile-3" style="border-radius:30px;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-custom-transparent-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e('', 'wira-business');?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/action-african-american-african-descent-agreement-american-black-1452903-pxhere.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->