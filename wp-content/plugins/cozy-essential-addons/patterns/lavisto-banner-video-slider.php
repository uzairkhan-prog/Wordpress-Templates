<?php

/**
 * Title: PRO: Banner Video Slider
 * Slug: cozy-essential-addons/lavisto-banner-video-slider
 * Categories: lavisto
 */
$ct_patterns_media = array(
    'https://videos.pexels.com/video-files/2711221/2711221-uhd_2560_1440_24fps.mp4',
    'https://videos.pexels.com/video-files/3015493/3015493-hd_1920_1080_24fps.mp4'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"lavisto-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group lavisto-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"5f9c0ee4-0153-47ae-b5d0-acc866141e50","pagination":{"width":20,"height":7,"borderRadius":10,"activeWidth":20,"activeBorderRadius":10,"bottom":22,"activeColor":"#FF8000","color":"#FFFFFF","activeColorHover":"#203B80","colorHover":"#FF8000","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":0,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":1,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#FF8000","backgroundColorHover":"#FF8000","colorHover":"#FFFFFF","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"sliderOptions":{"loop":true,"speed":3000,"slidesPerView":1,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":5000},"effect":"fade"}} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_5f9c0ee4_0153_47ae_b5d0_acc866141e50">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"7d76ca0c-82b7-497c-9263-07297b1a289a"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[0]) ?>","id":1442,"isUserOverlayColor":true,"backgroundType":"video","minHeight":760,"gradient":"primary-gradient","contentPosition":"bottom center","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:30px;padding-right:var(--wp--preset--spacing--60);padding-bottom:30px;padding-left:var(--wp--preset--spacing--60);min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url($ct_patterns_media[0]) ?>" data-object-fit="cover"></video>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"860px"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"120px"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:120px;text-transform:uppercase"><?php esc_html_e('Lavisto for Luxury', 'cozy-essential-addons') ?></h1>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"f79640b3-b752-4a46-a64f-48355892fd7d"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_media[1]) ?>","id":1430,"isUserOverlayColor":true,"backgroundType":"video","minHeight":760,"gradient":"primary-gradient","contentPosition":"bottom center","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:30px;padding-right:var(--wp--preset--spacing--60);padding-bottom:30px;padding-left:var(--wp--preset--spacing--60);min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-gradient-gradient-background"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url($ct_patterns_media[1]) ?>" data-object-fit="cover"></video>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"860px"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"120px"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:120px;text-transform:uppercase"><?php esc_html_e('Best Life Experience!', 'cozy-essential-addons') ?></h1>
                                <!-- /wp:heading -->
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