<?php

/**
 * Title: Services Section
 * Slug: fota-corporate/services-block
 * Categories: fota-corporate-patterns
 */
$fota_corporate_url = trailingslashit(get_stylesheet_directory_uri());
$fota_corporate_images = array(
    $fota_corporate_url . 'assets/images/growth_icon.png',
    $fota_corporate_url . 'assets/images/icon_2.png',
    $fota_corporate_url . 'assets/images/icon_3.png',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"none"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="text-transform:none"><?php esc_html_e('What We Do', 'fota-corporate') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Make prospects fall in love with your product from the outset. Let them interact with your product demos whenever or wherever', 'fota-corporate') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"60px"},"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":3460,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fota_corporate_images[0]) ?>" alt="" class="wp-image-3460" style="object-fit:cover;width:90px;height:90px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('Growth Mindset', 'fota-corporate') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fota-corporate') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Read More', 'fota-corporate') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":3460,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fota_corporate_images[1]) ?>" alt="" class="wp-image-3460" style="object-fit:cover;width:90px;height:90px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('Business Strategy', 'fota-corporate') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fota-corporate') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Read More', 'fota-corporate') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":3460,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fota_corporate_images[2]) ?>" alt="" class="wp-image-3460" style="object-fit:cover;width:90px;height:90px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('Startup Ideas', 'fota-corporate') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fota-corporate') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"10px","bottom":"10px"}}}} -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px"><?php esc_html_e('Read More', 'fota-corporate') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->