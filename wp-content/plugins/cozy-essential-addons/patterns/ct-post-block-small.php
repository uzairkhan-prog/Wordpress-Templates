<?php

/**
 * Title: PRO: Post Block Thumb Image
 * Slug: cozy-essential-addons/ct-post-block-small
 * Categories: ct-patterns, fotawp-posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
        <h3 class="wp-block-heading has-text-align-center">Latest Post</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
        <p class="has-text-align-center has-small-font-size" style="line-height:1.6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":73,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3}} -->
        <div class="wp-block-query"><!-- wp:post-template {"fontSize":"xx-small"} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|50","top":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"height":"200px","align":"wide","style":{"border":{"radius":"5px"}}} /--></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2,"fontSize":"28px"},"spacing":{"margin":{"top":"0"}}},"className":"is-style-title-hover-secondary-color"} /-->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->

                            <!-- wp:paragraph -->
                            <p>.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:post-date /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"fontSize":"x-small"} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->