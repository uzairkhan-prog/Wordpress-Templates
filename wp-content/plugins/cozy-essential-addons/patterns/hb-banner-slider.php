<?php

/**
 * Title: PRO: Banner Slider
 * Slug: cozy-essential-addons/hb-banner-slider
 * Categories: handyman-blocks
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/hb/banner_bg.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/hb/banner_bg_2.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Banner Slider"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"ef63a407-5361-4a89-9197-daffa9a66f68","pagination":{"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"bottom":24,"activeColor":"#FFB84F","color":"#fff","activeColorHover":"#FF4F4F","colorHover":"#FFFFFF","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":1,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#FFB84F","backgroundColorHover":"#FFB84F","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"sliderOptions":{"loop":true,"speed":700,"slidesPerView":1,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"effect":"none"}} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_ef63a407_5361_4a89_9197_daffa9a66f68">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"48651386-1b4c-4f70-b4c0-e61066ee50d9"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1993,"isUserOverlayColor":true,"minHeight":740,"gradient":"gradient-alternate","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"handyman-blocks-slide-up","layout":{"type":"constrained","contentSize":"880px"}} -->
                            <div class="wp-block-group handyman-blocks-slide-up" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","lineHeight":"1.5"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:60px;line-height:1.5;text-transform:uppercase"><?php esc_html_e('Expert Handyman Services at Your Doorstep!', 'cozy-essential-addons') ?></h1>
                                <!-- /wp:heading -->

                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                                <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-color","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                                    <!-- /wp:button -->

                                    <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"11e52701-740b-4f8c-ba12-36890a551ae0"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":2354,"isUserOverlayColor":true,"minHeight":740,"gradient":"gradient-alternate","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-2354" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"handyman-blocks-slide-up","layout":{"type":"constrained","contentSize":"880px"}} -->
                            <div class="wp-block-group handyman-blocks-slide-up" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","lineHeight":"1.5"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:60px;line-height:1.5;text-transform:uppercase"><?php esc_html_e('Expert Handyman Services at Your Doorstep!', 'cozy-essential-addons') ?></h1>
                                <!-- /wp:heading -->

                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
                                <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'cozy-essential-addons') ?></h2>
                                <!-- /wp:heading -->

                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}}} -->
                                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-color","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'cozy-essential-addons') ?></a></div>
                                    <!-- /wp:button -->

                                    <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request a Quote', 'cozy-essential-addons') ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
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