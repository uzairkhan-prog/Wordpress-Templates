<?php
/**
 * Title: blog
 * Slug: journey-turism/blog
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bg-3_edited-1.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"custom-color-3","isUserOverlayColor":true,"minHeight":15,"minHeightUnit":"rem","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-parallax" style="margin-top:0;margin-bottom:0;min-height:15rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-3-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bg-3_edited-1.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1","fontSize":"x-large","fontFamily":"tenor-sans"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line-black-1-1.png","id":800,"source":"file","title":"line-black-1-1"},"backgroundSize":"contain"}},"backgroundColor":"custom-color-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
<main class="wp-block-group has-custom-color-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"group"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"container-blog","layout":{"type":"constrained"}} -->
<div class="wp-block-group container-blog has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:post-content {"align":"full","style":{"typography":{"letterSpacing":"0.18px"}},"className":"container-blog","layout":{"type":"default"},"fontSize":"small","fontFamily":"roboto"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->


<!-- wp:template-part {"slug":"footer","area":"footer","className":"default-footer"} /-->