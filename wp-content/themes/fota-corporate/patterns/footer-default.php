<?php

/**
 * Title: Default Footer
 * Slug: fota-corporate/footer-default
 * Categories: fota-corporate-patterns, footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"style":"none","width":"0px"}},"backgroundColor":"accent-lite","textColor":"foregound-alt","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-foregound-alt-color has-accent-lite-background-color has-text-color has-background" style="border-style:none;border-width:0px;padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:site-title {"textAlign":"center","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}}} /-->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <p class="has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'fota-corporate') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"border":{"radius":"60px","width":"0px","style":"none"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"40px","right":"40px"},"margin":{"top":"60px","bottom":"0"},"blockGap":"0"}},"backgroundColor":"background","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:60px;margin-top:60px;margin-bottom:0;padding-top:32px;padding-right:40px;padding-bottom:32px;padding-left:40px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <p class="has-heading-color-color has-text-color has-link-color"><?php esc_html_e('Proudly powered by WordPress | Theme: Fota Corporate by CozyThemes.', 'fota-corporate') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#1c34f0","className":"is-style-logos-only fota-corporate-header-social","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|40"}}}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only fota-corporate-header-social"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

            <!-- wp:social-link {"url":"#","service":"twitter"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->