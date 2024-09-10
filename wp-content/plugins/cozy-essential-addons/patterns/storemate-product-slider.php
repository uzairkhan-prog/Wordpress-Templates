<?php

/**
 * Title: PRO: Product Slider
 * Slug: cozy-essential-addons/storemate-product-slider
 * Categories: storemate
 */
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/product-slider {"blockClientId":"90905da9-8aef-4cea-a596-c7f842c2dc23","pagination":{"enabled":true,"width":12,"height":12,"borderRadius":20,"activeWidth":12,"activeBorderRadius":20,"activeColor":"#e56404","color":"#FFFFFF","activeColorHover":"#007766","colorHover":"#e56404","verticalPosition":20},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"backgroundColor":"#FFFFFF","color":"#007766","backgroundColorHover":"#007766","colorHover":"#fff"}} -->
    <style>
        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-button-prev::after,
        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-button-next::after {
            font-size: 15px;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-button-prev,
        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-button-next {
            width: 45px;
            height: 45px;
            border-radius: 50px;
            color: #007766;
            background-color: #FFFFFF;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-button-prev:hover,
        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-button-next:hover {
            color: #fff;
            background-color: #007766;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-pagination {
            bottom: 20px;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            border-radius: 20px;
            background-color: #FFFFFF;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-pagination .swiper-pagination-bullet-active {
            width: 12px;
            border-radius: 20px;
            background-color: #e56404;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-pagination .swiper-pagination-bullet:hover {
            background-color: #e56404;
        }

        #cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23 .swiper-pagination .swiper-pagination-bullet-active:hover {
            background-color: #007766;
        }
    </style>
    <div class="cozy-block-product-slider hover-show" id="cozyBlock_90905da9_8aef_4cea_a596_c7f842c2dc23"><!-- wp:query {"queryId":5,"query":{"perPage":10,"postType":"product"},"lock":{"move":"false","remove":"true"},"className":"cozy-product-slider__swiper-container"} -->
        <div class="wp-block-query cozy-product-slider__swiper-container"><!-- wp:post-template {"lock":{"move":"false","remove":"true"},"className":"swiper-wrapper"} -->
            <!-- wp:cover {"useFeaturedImage":true,"minHeight":540,"customGradient":"linear-gradient(90deg,rgb(5,5,5) 0%,rgba(0,0,0,0.18) 100%)","contentPosition":"center center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"#ffffff"}}},"color":{"text":"#ffffff"}},"className":"storemate-zoom-in-up","layout":{"type":"constrained","contentSize":"1340px"}} -->
            <div class="wp-block-cover storemate-zoom-in-up has-text-color has-link-color" style="color:#ffffff;padding-left:var(--wp--preset--spacing--50);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(90deg,rgb(5,5,5) 0%,rgba(0,0,0,0.18) 100%)"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:post-title {"textAlign":"","isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"xxx-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                            <!-- wp:post-excerpt {"textAlign":"","excerptLength":35,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"light-color","fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-summary"} /-->

                            <!-- wp:group {"style":{"color":{"text":"#36cfc6"},"elements":{"link":{"color":{"text":"#36cfc6"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group has-text-color has-link-color" style="color:#36cfc6;font-size:24px;font-style:normal;font-weight:500"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"secondary","fontSize":"normal","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} /-->

                                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"normal","style":{"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"style":{"color":{"text":"#36cfc6"},"elements":{"link":{"color":{"text":"#36cfc6"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group has-text-color has-link-color" style="color:#36cfc6;font-size:24px;font-style:normal;font-weight:500"><!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"backgroundColor":"primary","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"40px","right":"40px"}}}} /--></div>
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
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/product-slider -->
</div>
<!-- /wp:group -->