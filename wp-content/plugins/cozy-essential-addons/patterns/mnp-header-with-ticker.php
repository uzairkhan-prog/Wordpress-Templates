<?php

/**
 * Title: PRO: Header Minimal with News Ticker
 * Slug: cozy-essential-addons/mnp-header-with-ticker
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"box-background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-box-background-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1400px"}} -->
    <div class="wp-block-group has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:16px;padding-right:0px;padding-bottom:16px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"160px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:160px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"}}}},"textColor":"box-background","fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-box-background-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Breaking News', 'cozy-essential-addons') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:cozy-block/icon-picker {"blockClientId":"b4961538-c745-41eb-8683-29ddc02d5704","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z","iconColor":"#FFFFFF"} -->
                        <div class="cozy-block-icon-picker default" id="cozyBlock_b4961538_c745_41eb_8683_29ddc02d5704"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#FFFFFF">
                                <path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path>
                            </svg></div>
                        <!-- /wp:cozy-block/icon-picker -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cozy-block/news-ticker {"blockClientId":"96e3aeb3-63c1-4d27-9663-1c1e3675f8c1","height":25,"carouselOptions":{"navigation":{"enabled":true,"verticalGap":-2,"horizontalGap":49,"iconSize":10,"iconBoxWidth":30,"iconBoxHeight":30,"borderRadius":50,"backgroundColor":"#FFFFFF","color":"#0047B3","backgroundColorHover":"#FF8E09","colorHover":"#FFFFFF"},"sliderOptions":{"loop":true,"autoplay":true,"slidesPerView":"1","spaceBetween":30,"speed":700}}} -->
                    <div class="cozy-block-news-ticker-wrapper " id="cozyBlock_96e3aeb3_63c1_4d27_9663_1c1e3675f8c1"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":false,"remove":true},"className":"swiper-container swiper-vertical"} -->
                        <div class="wp-block-query swiper-container swiper-vertical"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"swiper-wrapper"} -->
                            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"medium"} /-->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                        <div class="swiper-button-prev cozy-block-button-prev"></div>
                        <div class="swiper-button-next cozy-block-button-next"></div>
                    </div>
                    <!-- /wp:cozy-block/news-ticker -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase"}},"fontSize":"xx-large","fontFamily":"oswald"} /-->

            <!-- wp:navigation {"ref":1067,"textColor":"heading-color","overlayBackgroundColor":"background","overlayTextColor":"heading-color","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"0"}}} /-->

            <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#2D2D2D","iconBackgroundColor":"background","iconBackgroundColorValue":"#F0F1F4","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->