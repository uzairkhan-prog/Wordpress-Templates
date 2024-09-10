<?php

/**
 * Title: Testimonial Section
 * Slug: fota-corporate/testimonials-section
 * Categories: fota-corporate-patterns
 */
$fota_corporate_url = trailingslashit(get_stylesheet_directory_uri());
$fota_corporate_images = array(
    $fota_corporate_url . 'assets/images/testimonial.png',
);
?>
<!-- wp:group {"metadata":{"categories":["fotawp-testimonials"],"patternName":"fotawp/testimonials-section","name":"Testimonial Section"},"style":{"spacing":{"padding":{"top":"100px","right":"var:preset|spacing|40","bottom":"100px","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6,"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
        <p class="has-background-color has-text-color has-link-color" style="font-size:18px;line-height:1.6"><?php esc_html_e('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fota-corporate') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-top:30px"><!-- wp:image {"id":1822,"width":"84px","height":"84px","scale":"cover","className":"is-resized","style":{"border":{"radius":"50px"}}} -->
            <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fota_corporate_images[0]) ?>" alt="" class="wp-image-1822" style="border-radius:50px;object-fit:cover;width:84px;height:84px" /></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
                <h5 class="wp-block-heading has-background-color has-text-color has-link-color"><?php esc_html_e('Robert Handsome', 'fota-corporate') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
                <p class="has-background-color has-text-color has-link-color"><?php esc_html_e('Business Owner', 'fota-corporate') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->