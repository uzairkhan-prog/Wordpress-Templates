<?php

/**
 * Title: PRO: Post Carousel 3
 * Slug: cozy-essential-addons/mnp-post-carousel-3
 * Categories: magnewspress
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}}},"className":"magnewspress-fade-up","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group magnewspress-fade-up" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cozy-block/post-slider {"blockClientId":"494ca636-b146-4a53-a7aa-d12d1ef241c5","carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#FFFFFF","color":"#FFFFFF","activeColorHover":"#FFFFFF","colorHover":"#FF8E09","positionVertical":5},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"backgroundColor":"#fff","color":"#0047B3","backgroundColorHover":"#0047B3","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":true,"slidesPerView":"4","spaceBetween":17,"speed":700}}} -->
    <div class="cozy-block-post-slider-wrapper hover-show" id="cozyBlock_494ca636_b146_4a53_a7aa_d12d1ef241c5"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"post"},"lock":{"move":"false","remove":"true"},"className":"swiper-container"} -->
        <div class="wp-block-query swiper-container"><!-- wp:post-template {"lock":{"move":"false","remove":"true"},"className":"swiper-wrapper"} -->
            <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"focalPoint":{"x":0.52,"y":0.02},"minHeight":460,"minHeightUnit":"px","gradient":"primary-gradient-btm","contentPosition":"center center","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"magnewspress-translate-cover","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover magnewspress-translate-cover" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px;min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-primary-gradient-btm-gradient-background"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|box-background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"large"} /-->

                    <!-- wp:post-date {"textAlign":"center"} /-->
                </div>
            </div>
            <!-- /wp:cover -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/post-slider -->
</div>
<!-- /wp:group -->