<?php

/**
 * Title: Mighty Builder slider (PRO)
 * Slug: cozy-essential-addons/mb-slider
 * Categories: mighty-builders
 */
$ct_patterns_media = array(
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/mb/banner_image.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/mb/banner_image_2.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/mb/banner_image_3.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"657px"}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="min-height:657px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"27090fb4-f28a-4e03-9e85-19816346234b","pagination":{"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"bottom":24,"activeColor":"#FD8F14","color":"#fff","activeColorHover":"#914E01","colorHover":"#914E01","dynamicBullets":false},"navigation":{"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"backgroundColor":"#fff","color":"#FD8F14","backgroundColorHover":"#FD8F14","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"sliderOptions":{"loop":true,"speed":700,"slidesPerView":1,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"effect":"cube"}} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_27090fb4_f28a_4e03_9e85_19816346234b">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"d0f89486-3a92-4140-94c5-c74f3899413a"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":7665,"dimRatio":40,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
                    <div class="wp-block-cover" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7665" alt="" src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                            <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"mighty-builders-slide-up","layout":{"type":"constrained","contentSize":""}} -->
                                    <div class="wp-block-group mighty-builders-slide-up" style="padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large","cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
                                        <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:10px;margin-bottom:24px;text-transform:uppercase"><?php esc_html_e('Building Dreams, Crafting Futures: Your Trusted Construction Partner!', 'cozy-essential-addons') ?></h1>
                                        <!-- /wp:heading -->

                                        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                                            <!-- /wp:button -->

                                            <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request an Estimate', 'cozy-essential-addons') ?></a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"></div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"2bf51043-0df8-48aa-9bd9-d0eb344921e6"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":7844,"dimRatio":40,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
                    <div class="wp-block-cover" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7844" alt="" src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                            <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"mighty-builders-slide-up","layout":{"type":"constrained","contentSize":""},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
                                    <div class="wp-block-group mighty-builders-slide-up" style="padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                                        <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:10px;margin-bottom:24px;text-transform:uppercase"><?php esc_html_e('Building the Foundations of Progress: Crafting Sustainable Structures for a Better Future', 'cozy-essential-addons') ?></h1>
                                        <!-- /wp:heading -->

                                        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                                            <!-- /wp:button -->

                                            <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request an Estimate', 'cozy-essential-addons') ?></a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"></div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"8eff60f1-0297-4ba2-b848-f5e5c2f70d72"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[2]) ?>","id":7845,"dimRatio":40,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
                    <div class="wp-block-cover" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40);min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7845" alt="" src="<?php echo esc_url($ct_patterns_media[2]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                            <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"mighty-builders-slide-up","layout":{"type":"constrained","contentSize":""}} -->
                                    <div class="wp-block-group mighty-builders-slide-up" style="padding-right:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                                        <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:10px;margin-bottom:24px;text-transform:uppercase"><?php esc_html_e('Powered by Industry-Leading Machinery: Setting the Standard in Equipment Excellence', 'cozy-essential-addons') ?></h1>
                                        <!-- /wp:heading -->

                                        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                                        <!-- /wp:heading -->

                                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                                            <!-- /wp:button -->

                                            <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request an Estimate', 'cozy-essential-addons') ?></a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"></div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->
            </div>
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
    </div>
    <!-- /wp:cozy-block/slider -->
</div>
<!-- /wp:group -->