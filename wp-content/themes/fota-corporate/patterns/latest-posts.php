<?php

/**
 * Title: Latest Posts
 * Slug: fota-corporate/latest-posts
 * Categories: fota-corporate-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"48px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:48px"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e('Latest News and Articles', 'fota-corporate') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Make prospects fall in love with your product from the outset. Let them interact with your product demos whenever or wherever', 'fota-corporate') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":29,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"fota-corporate-post-box","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20","margin":{"bottom":"0px"}},"border":{"radius":"0px","width":"1px"}},"backgroundColor":"transparent","borderColor":"border-color","layout":{"inherit":false}} -->
        <div class="wp-block-group fota-corporate-post-box has-border-color has-border-color-border-color has-transparent-background-color has-background" style="border-width:1px;border-radius:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-mixed-color","style":{"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|post-meta-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"fontSize":"xx-small"} /-->

                <!-- wp:post-title {"isLink":true,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30"}},"typography":{"fontSize":"24px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:avatar {"size":24,"style":{"border":{"radius":"50px"}}} /-->

                        <!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|post-meta-color"}}}},"textColor":"post-meta-color"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:post-date {"className":"is-style-post-date-with-icon"} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"excerptLength":21} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"28px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="margin-top:28px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:read-more {"content":"Read More","className":"is-style-readmore-hover-secondary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}}},"backgroundColor":"primary","textColor":"background"} /--></div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->