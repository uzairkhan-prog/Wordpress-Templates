<?php

/**
 * Title: About Section
 * Slug: fota-corporate/about-section
 * Categories: fota-corporate-patterns
 */
$fota_corporate_url = trailingslashit(get_stylesheet_directory_uri());
$fota_corporate_images = array(
    $fota_corporate_url . 'assets/images/about_image.jpg',
    $fota_corporate_url . 'assets/images/about_image_2.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent-lite","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-accent-lite-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
            <h2 class="wp-block-heading"><?php esc_html_e('About Us', 'fota-corporate') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat', 'fota-corporate') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"48px","right":"48px","top":"16px","bottom":"16px"}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:16px;padding-right:48px;padding-bottom:16px;padding-left:48px"><?php esc_html_e('Explore More', 'fota-corporate') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":3472,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fota_corporate_images[0]) ?>" alt="" class="wp-image-3472" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"84px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:84px"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":3477,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($fota_corporate_images[1]) ?>" alt="" class="wp-image-3477" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"textTransform":"none"}}} -->
            <h2 class="wp-block-heading" style="text-transform:none"><?php esc_html_e('Future Goal', 'fota-corporate') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat', 'fota-corporate') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"48px","right":"48px","top":"16px","bottom":"16px"}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:16px;padding-right:48px;padding-bottom:16px;padding-left:48px"><?php esc_html_e('Explore More', 'fota-corporate') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->