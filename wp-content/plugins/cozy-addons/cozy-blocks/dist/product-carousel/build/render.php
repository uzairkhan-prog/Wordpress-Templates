<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyProductCarousel_' . str_replace( '-', '_', $client_id );

$currency_symbol                = get_woocommerce_currency_symbol();
$currency_position              = get_option( 'woocommerce_currency_pos' );
$attributes['currencySymbol']   = $currency_symbol;
$attributes['currencyPosition'] = $currency_position;

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductCarouselInit( "' . $client_id . '" ) }) ' );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$sale_badge_font_size   = isset( $attributes['saleBadge']['typography']['fontSize'] ) ? $attributes['saleBadge']['typography']['fontSize'] : '';
$sale_badge_font_weight = isset( $attributes['saleBadge']['typography']['fontWeight'] ) ? $attributes['saleBadge']['typography']['fontWeight'] : '';
$sale_badge_font_family = isset( $attributes['saleBadge']['typography']['fontFamily'] ) ? $attributes['saleBadge']['typography']['fontFamily'] : '';
$sale_badge_font_color  = isset( $attributes['saleBadge']['typography']['color'] ) ? $attributes['saleBadge']['typography']['color'] : '';

$sale_badge_label = array(
	'font_size'   => isset( $attributes['saleBadge']['labelTypography']['fontSize'] ) ? $attributes['saleBadge']['labelTypography']['fontSize'] : '',
	'font_weight' => isset( $attributes['saleBadge']['labelTypography']['fontWeight'] ) ? $attributes['saleBadge']['labelTypography']['fontWeight'] : '',
	'font_family' => isset( $attributes['saleBadge']['labelTypography']['fontFamily'] ) ? $attributes['saleBadge']['labelTypography']['fontFamily'] : '',
);

$sale_badge_color = array(
	'text' => isset( $attributes['saleBadge']['labelTypography']['color'] ) ? $attributes['saleBadge']['labelTypography']['color'] : '',
	'bg'   => isset( $attributes['saleBadge']['bgColor'] ) ? $attributes['saleBadge']['bgColor'] : '',
);

$read_more_color = array(
	'bg_hover'   => isset( $attributes['buttonHoverColor']['background'] ) ? $attributes['buttonHoverColor']['background'] : '',
	'text_hover' => isset( $attributes['buttonHoverColor']['text'] ) ? $attributes['buttonHoverColor']['text'] : '',
);

$rating_color = array(
	'icon' => isset( $attributes['reviewStyles']['color'] ) ? $attributes['reviewStyles']['color'] : '',
);

$nav_color = array(
	'icon'       => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'bg'         => isset( $attributes['navigation']['backgroundColor'] ) ? $attributes['navigation']['backgroundColor'] : '',
	'icon_hover' => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_hover'   => isset( $attributes['navigation']['backgroundColorHover'] ) ? $attributes['navigation']['backgroundColorHover'] : '',
);

$bullet       = array(
	'align' => isset( $attributes['pagination']['align'] ) ? $attributes['pagination']['align'] : 'center',
	'left'  => isset( $attributes['pagination']['align'], $attributes['pagination']['left'] ) && 'left' === $attributes['pagination']['align'] ? 'padding-left: ' . $attributes['pagination']['left'] . ';' : '',
	'right' => isset( $attributes['pagination']['align'], $attributes['pagination']['right'] ) && 'right' === $attributes['pagination']['align'] ? 'padding-right: ' . $attributes['pagination']['right'] . ';' : '',
);
$bullet_color = array(
	'default'       => isset( $attributes['pagination']['color'] ) ? $attributes['pagination']['color'] : '',
	'active'        => isset( $attributes['pagination']['activeColor'] ) ? $attributes['pagination']['activeColor'] : '',
	'default_hover' => isset( $attributes['pagination']['colorHover'] ) ? $attributes['pagination']['colorHover'] : '',
	'active_hover'  => isset( $attributes['pagination']['activeColorHover'] ) ? $attributes['pagination']['activeColorHover'] : '',
);

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = <<<BLOCK_STYLES
#$block_id.layout-grid .cozy-layout-grid {
    row-gap: {$attributes['gridOptions']['columnGap']}px;
    column-gap: {$attributes['gridOptions']['columnGap']}px;
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
}
@media screen and (max-width: 1024px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat({$width1}, 1fr) !important;
    }
}
@media screen and (max-width: 767px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat({$width2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id.on-sale .cozy-sale-badge {
    padding: {$attributes['saleBadge']['padding']['top']}px {$attributes['saleBadge']['padding']['right']}px {$attributes['saleBadge']['padding']['bottom']}px {$attributes['saleBadge']['padding']['left']}px;
    border: {$attributes['saleBadge']['borderWidth']}px {$attributes['saleBadge']['borderType']} {$attributes['saleBadge']['borderColor']};
    border-radius: {$attributes['saleBadge']['borderRadius']}px;
    background-color: {$sale_badge_color['bg']};
    rotate: {$attributes['saleBadge']['rotate']}deg;
    top: {$attributes['saleBadge']['top']}px;
    font-size: {$sale_badge_font_size}px;
    font-weight: {$sale_badge_font_weight};
    font-family: {$sale_badge_font_family};
    color: {$sale_badge_font_color};
}
#$block_id.on-sale.sale-badge-display-block .cozy-sale-badge * {
    margin-bottom: {$attributes['saleBadge']['marginBottom']}px;
}
#$block_id.on-sale.sale-badge-display-flex .cozy-sale-badge {
    gap: {$attributes['saleBadge']['gap']}px;
}
#$block_id.on-sale.sale-badge-position-left .cozy-sale-badge{
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id.on-sale.sale-badge-position-right .cozy-sale-badge{
    right: {$attributes['saleBadge']['right']}px;
}
#$block_id.on-sale .cozy-sale-badge .label-before,
#$block_id.on-sale .cozy-sale-badge .label-after {
    font-size: {$sale_badge_label['font_size']}px;
    font-weight: {$sale_badge_label['font_weight']};
    font-family: {$sale_badge_label['font_family']};
    color: {$sale_badge_color['text']};
}

#$block_id .cozy-template-two .wp-block-read-more:hover,
#$block_id .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
#$block_id .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
    background-color: {$read_more_color['bg_hover']} !important;
    color: {$read_more_color['text_hover']} !important;
    opacity: 1 !important;
}

#$block_id .wc-block-components-product-rating__stars {
    font-size: {$attributes['reviewStyles']['fontSize']}px;
    color: {$rating_color['icon']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['navigation']['iconSize']}px;
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['navigation']['iconBoxWidth']}px;
    height: {$attributes['navigation']['iconBoxHeight']}px;
    border-radius: {$attributes['navigation']['borderRadius']}px;
    color: {$nav_color['icon']};
    background-color: {$nav_color['bg']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$nav_color['icon_hover']};
    background-color: {$nav_color['bg_hover']};
}

#$block_id .swiper-pagination {
    bottom: {$attributes['pagination']['verticalPosition']}px;
    text-align: {$bullet['align']};
    {$bullet['left']}
    {$bullet['right']}
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']}px;
    height: {$attributes['pagination']['height']}px;
    border-radius: {$attributes['pagination']['borderRadius']}px;
    background-color: {$bullet_color['default']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['activeWidth']}px;
    border-radius: {$attributes['pagination']['activeBorderRadius']}px;
    background-color: {$bullet_color['active']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$bullet_color['default_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$bullet_color['active_hover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
if ( isset( $attributes['saleBadge']['typography']['fontFamily'] ) && ! empty( $attributes['saleBadge']['typography']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['saleBadge']['typography']['fontFamily'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['saleBadge']['labelTypography']['fontFamily'] ) && ! empty( $attributes['saleBadge']['labelTypography']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['saleBadge']['labelTypography']['fontFamily'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
$output .= $content;
$output .= '</div>';

echo $output;
