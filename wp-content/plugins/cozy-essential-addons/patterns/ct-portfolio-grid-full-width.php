<?php

/**
 * Title: PRO: Dynamic Portfolio Grid Full Width Layout
 * Slug: cozy-essential-addons/ct-portfolio-grid-full-width
 * Categories: ct-patterns, fotawp-portfolio
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"0","left":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color"} -->
            <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-style:normal;font-weight:500">Portfolio</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":80,"query":{"perPage":"6","pages":0,"offset":0,"postType":"cea_portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"className":"ct-portfolio-blocks"} -->
        <div class="wp-block-query ct-portfolio-blocks"><!-- wp:post-template -->
            <!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":440,"contentPosition":"bottom center","isDark":false,"align":"center","className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-cover aligncenter is-light has-custom-content-position is-position-bottom-center is-style-default" style="padding-bottom:var(--wp--preset--spacing--50);min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"className":"is-style-title-hover-secondary-color","fontSize":"large"} /--></div>
            </div>
            <!-- /wp:cover -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->