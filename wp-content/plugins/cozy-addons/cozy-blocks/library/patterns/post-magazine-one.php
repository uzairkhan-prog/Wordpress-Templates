<?php
/**
 * Title: Post Magazine section one with slider and grid
 * Description: This is post magazine section with slider and grid
 * Slug: cozy-block-patterns/post-magazine-one
 * Categories: cozy-block-patterns, posts-and-magazine
 * Dynamic: true
 */
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Posts and Magazine', 'cozy-addons' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"#fffffe"}},"className":"cozy-block-pattern__post-one","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull cozy-block-pattern__post-one has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"16px","left":"16px","top":"80px","bottom":"80px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:16px;padding-bottom:80px;padding-left:16px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}},"className":"cozy-post-one__slider-post"} -->
<div class="wp-block-column is-vertically-aligned-top cozy-post-one__slider-post"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"spacing":{"margin":{"bottom":"26px"}}},"cozyCustomFont":"Public Sans"} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;margin-bottom:26px;font-size:24px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Slider News', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:cozy-block/post-slider {"blockClientId":"065b9b56-76de-40ed-bc4d-05e5ef2eba36","hoverShow":false,"carouselOptions":{"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#01ae8f","color":"#252525","activeColorHover":"#f49805","colorHover":"#f49805","positionVertical":-32},"navigation":{"enabled":false,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":true,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":1,"spaceBetween":30,"speed":"1000"}}} -->
<div class="cozy-block-post-slider-wrapper " id="cozyBlock_065b9b56_76de_40ed_bc4d_05e5ef2eba36"><!-- wp:query {"queryId":1,"query":{"perPage":"3","postType":"post"},"lock":{"move":"false","remove":"true"},"className":"swiper-container"} -->
<div class="wp-block-query swiper-container"><!-- wp:post-template {"lock":{"move":"false","remove":"true"},"style":{"spacing":{"blockGap":"0"}},"className":"swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"},"cozyCustomFont":"Nuosu SIL"} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-featured-image {"isLink":true,"height":"497px","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"12px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}}} /-->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"textTransform":"uppercase","fontSize":"24px"}}} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"fontSize":"12px","textTransform":"none"},"spacing":{"blockGap":"16px","margin":{"top":"4px","bottom":"4px"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"cozyCustomFont":"Alegreya Sans"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#6a6a6a;margin-top:4px;margin-bottom:4px;font-size:12px;text-transform:none"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"de244247-9a60-432e-a8d8-848ea475fbc3","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z","iconColor":"#090b10"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_de244247_9a60_432e_a8d8_848ea475fbc3"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#090b10"><path d="M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"fontSize":"14px","textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/icon-picker {"blockClientId":"87446933-ae67-4856-a1fb-8c987ed80769","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#090b10"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_87446933_ae67_4856_a1fb_8c987ed80769"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#090b10"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More","showMoreOnNewLine":false,"excerptLength":28,"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"textTransform":"none","fontSize":"14px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><div class="swiper-pagination cozy-pagination"></div></div>
<!-- /wp:cozy-block/post-slider --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}},"className":"cozy-post-one__latest-post"} -->
<div class="wp-block-column is-vertically-aligned-top cozy-post-one__latest-post"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"26px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:26px"><!-- wp:heading {"style":{"typography":{"fontSize":"24px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyCustomFont":"Public Sans"} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:24px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Latest News', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"5px"}},"color":{"text":"#6a6a6a"},"elements":{"link":{"color":{"text":"#6a6a6a"},":hover":{"color":{"text":"#f49805"}}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#6a6a6a;margin-bottom:5px"><a href="#"><?php esc_html_e( 'View More', 'cozy-addons' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"8c31b6d5-da45-483d-9b74-39153328a499","iconSize":18,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z","iconRotate":90} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_8c31b6d5_da45_483d_9b74_39153328a499"><svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/post-carousel {"blockClientId":"0e220fef-d681-4acf-8e8c-90e5a3cb0f02","layout":"grid","gridOptions":{"displayColumn":"2","masonryEnabled":false,"columnGap":30}} -->
<div class="cozy-block-post-grid-wrapper  hover-show" id="cozyBlock_0e220fef_d681_4acf_8e8c_90e5a3cb0f02"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
<div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"},"cozyCustomFont":"Nuosu SIL"} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"position__relative","layout":{"type":"constrained"}} -->
<div class="wp-block-group position__relative"><!-- wp:post-featured-image {"isLink":true,"height":"230px","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"textTransform":"uppercase","fontSize":"18px"},"spacing":{"margin":{"top":"8px","bottom":"4px"}}}} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"fontSize":"16px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"cozyCustomFont":"Alumni Sans"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#6a6a6a;font-size:16px;font-style:normal;font-weight:600;text-transform:uppercase"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"d2a2d533-6e74-4560-9d8a-87dc1af21559","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z","iconColor":"#090b10"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_d2a2d533_6e74_4560_9d8a_87dc1af21559"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#090b10"><path d="M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/icon-picker {"blockClientId":"350ed6b6-b7a5-47d3-8d0e-b1985d1de95d","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#090b10"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_350ed6b6_b7a5_47d3_8d0e_b1985d1de95d"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#090b10"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More","showMoreOnNewLine":false,"excerptLength":15,"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"textTransform":"none","fontSize":"14px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/post-carousel --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->