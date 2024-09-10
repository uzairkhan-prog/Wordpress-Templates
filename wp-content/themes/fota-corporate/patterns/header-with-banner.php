<?php

/**
 * Title: Header with Banner
 * Slug: fota-corporate/header-with-banner
 * Categories: fota-corporate-patterns, header
 */
$fota_corporate_url = trailingslashit(get_stylesheet_directory_uri());
$fota_corporate_images = array(
    $fota_corporate_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($fota_corporate_images[0]) ?>","id":3420,"dimRatio":50,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeightUnit":"px","contentPosition":"center center","metadata":{"categories":["fotawp-header"],"patternName":"fotawp/header-large-with-slant-banner","name":"Header larger with slant banner bottom"},"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3420" alt="" src="<?php echo esc_url($fota_corporate_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"var:preset|spacing|40","bottom":"24px","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#ffffff29","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="border-bottom-color:#ffffff29;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"x-large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:navigation {"textColor":"foregound-alt","overlayBackgroundColor":"foregound-alt","overlayTextColor":"heading-color","className":"fotawp-navigation"} -->
                    <!-- wp:home-link {"label":"Home"} /-->

                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":680,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
        <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-100 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4","fontSize":"64px","textTransform":"uppercase"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","left":"0"}}},"textColor":"foregound-alt"} -->
                <h2 class="wp-block-heading alignwide has-text-align-center has-foregound-alt-color has-text-color" style="margin-top:0;margin-right:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:64px;font-style:normal;font-weight:700;line-height:1.4;text-transform:uppercase"><?php esc_html_e('Dream . Plan . Execute!', 'fota-corporate') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontSize":"18px"},"spacing":{"margin":{"bottom":"40px","top":"10px"}}},"textColor":"foregound-alt"} -->
                <p class="has-text-align-center has-foregound-alt-color has-text-color" style="margin-top:10px;margin-bottom:40px;font-size:18px;line-height:1.6"><?php esc_html_e('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the sys!', 'fota-corporate') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","verticalAlignment":"center","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}}}} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px"><?php esc_html_e('Schedule an Appointment', 'fota-corporate') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"background","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"48px","right":"48px","top":"18px","bottom":"18px"}}}} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0px;padding-top:18px;padding-right:48px;padding-bottom:18px;padding-left:48px"><?php esc_html_e('Request Demo', 'fota-corporate') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
</div>
<!-- /wp:cover -->