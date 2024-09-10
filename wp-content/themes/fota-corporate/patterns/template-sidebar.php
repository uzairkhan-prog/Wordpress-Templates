<?php

/**
 * Title:Sidebar Template
 * Slug: fota-corporate/template-sidebar
 * Categories: fota-corporate-patterns
 */
$fota_corporate_url = trailingslashit(get_stylesheet_directory_uri());
$fota_corporate_images = array(
    $fota_corporate_url . 'assets/images/sidebar_image.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"28px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:28px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","fontSize":"small"} /--></div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"28px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:28px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="wp-block-heading has-large-font-size"><?php esc_html_e('Author Profile', 'fota-corporate') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;margin-top:15px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":1988,"width":"125px","height":"125px","sizeSlug":"full","linkDestination":"none","align":"left","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image alignleft size-full is-resized has-custom-border"><img src="<?php echo esc_url($fota_corporate_images[0]) ?>" alt="" class="wp-image-1988" style="border-radius:50%;width:125px;height:125px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e('Maria Hazelwood', 'fota-corporate') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Check out our new font generatorand level up your social bios. Need more? Head over to Glyphy for all the fancy fonts  and cool symbols you could ever imagine.', 'fota-corporate') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"primary","iconBackgroundColorValue":"#024890","style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"28px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="wp-block-heading has-large-font-size"><?php esc_html_e('Latest Posts', 'fota-corporate') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}},"border":{"width":"1px","color":"#D7DFE7","radius":"0px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color" style="border-color:#D7DFE7;border-width:1px;border-radius:0px;margin-top:15px;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:query {"queryId":29,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"0px"}},"layout":{"inherit":false}} -->
                <div class="wp-block-group" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"90px"} -->
                        <div class="wp-block-column" style="flex-basis:90px"><!-- wp:post-featured-image {"height":"90px","style":{"border":{"radius":"0px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"#262424"}}},"spacing":{"margin":{"bottom":"10px","top":"0","right":"0px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500","fontSize":"16px"}},"textColor":"foreground","className":"is-style-title-hover-secondary-color"} /-->

                                <!-- wp:post-date {"fontSize":"xx-small"} /-->
                            </div>
                            <!-- /wp:group -->
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

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"28px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="wp-block-heading has-large-font-size"><?php esc_html_e('Categories', 'fota-corporate') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"28px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;margin-top:15px;margin-bottom:28px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"className":"is-style-fotawp-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /--></div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"28px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="wp-block-heading has-large-font-size"><?php esc_html_e('Tags', 'fota-corporate') ?></h4>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"28px"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;margin-top:15px;margin-bottom:28px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:tag-cloud {"smallestFontSize":"12pt","largestFontSize":"12pt","className":"fotawp-sidebar-tags"} /--></div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->