<?php
$client_id = ! empty( $attributes['clientId'] ) ? $attributes['clientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['siteURL'] = site_url();

wp_localize_script( 'cozy-block-scripts', $block_id, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockFeaturedProductTabs( "' . $client_id . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$heading_color = array(
	'text' => isset( $attributes['tabHeading']['color'] ) ? $attributes['tabHeading']['color'] : '',
);

$separator_padding = cozy_render_TRBL( 'padding', $attributes['separatorStyles']['padding'] );
$separator_border  = isset( $attributes['separatorStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['separatorStyles']['border'] ) : '';
$separator_radius  = isset( $attributes['separatorStyles']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['separatorStyles']['radius'] ) : '';
$separator_styles  = array(
	'bg_color' => isset( $attributes['separatorStyles']['bgColor'] ) ? $attributes['separatorStyles']['bgColor'] : '',
);

$tab_padding        = cozy_render_TRBL( 'padding', $attributes['tabStyles']['padding'] );
$tab_border_radius  = cozy_render_TRBL( 'border-radius', $attributes['tabStyles']['radius'] );
$default_tab_border = isset( $attributes['tabStyles']['default']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['default']['border'] ) : '';
$active_tab_border  = isset( $attributes['tabStyles']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['active']['border'] ) : '';
$tab_styles         = array(
	'default_color'    => isset( $attributes['tabStyles']['default']['color'] ) ? $attributes['tabStyles']['default']['color'] : '',
	'default_bg_color' => isset( $attributes['tabStyles']['default']['bgColor'] ) ? $attributes['tabStyles']['default']['bgColor'] : '',
	'active_color'     => isset( $attributes['tabStyles']['active']['color'] ) ? $attributes['tabStyles']['active']['color'] : '',
	'active_bg_color'  => isset( $attributes['tabStyles']['active']['bgColor'] ) ? $attributes['tabStyles']['active']['bgColor'] : '',
);

$active_tab_overlay = isset( $attributes['separatorStyles']['border']['bottom']['width'] ) ? $attributes['separatorStyles']['border']['bottom']['width'] : '';

$item_padding    = cozy_render_TRBL( 'padding', $attributes['itemStyles']['padding'] );
$item_border     = isset( $attributes['itemStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemStyles']['border'] ) : '';
$item_text_align = isset( $attributes['itemStyles']['textAlignment'] ) ? $attributes['itemStyles']['textAlignment'] : 'left';
$item_color      = array(
	'shadow'       => isset( $attributes['itemStyles']['shadow']['color'] ) ? $attributes['itemStyles']['shadow']['color'] : '',
	'bg'           => isset( $attributes['itemStyles']['bgColor'] ) ? $attributes['itemStyles']['bgColor'] : '',
	'bg_hover'     => isset( $attributes['itemStyles']['bgColorHover'] ) ? $attributes['itemStyles']['bgColorHover'] : '',
	'border_hover' => isset( $attributes['itemStyles']['borderColorHover'] ) ? $attributes['itemStyles']['borderColorHover'] : '',
);

$icon_box_padding = cozy_render_TRBL( 'padding', $attributes['iconBox']['padding'] );
$icon_box_border  = isset( $attributes['iconBox']['border'] ) ? cozy_render_TRBL( 'border', $attributes['iconBox']['border'] ) : '';
$icon_box_styles  = array(
	'bg_color'            => isset( $attributes['iconBox']['bgColor'] ) ? $attributes['iconBox']['bgColor'] : '',
	'bg_color_active'     => isset( $attributes['iconBox']['bgColorActive'] ) ? $attributes['iconBox']['bgColorActive'] : '',
	'border_color_active' => isset( $attributes['iconBox']['borderColorActive'] ) ? $attributes['iconBox']['borderColorActive'] : '',
);
$icon_opacity     = number_format( ( floatval( $attributes['icon']['opacity'] ) / 100 ), 2 );
$icon_styles      = array(
	'stroke_width'   => 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['strokeWidth'] : '',
	'stroke_opacity' => 'outline' === $attributes['icon']['layout'] ? number_format( floatval( $attributes['icon']['opacity'] / 100 ), 2 ) : '',
);

$img_radius = cozy_render_TRBL( 'border-radius', $attributes['imageStyles']['radius'] );

$sale_badge_padding = cozy_render_TRBL( 'padding', $attributes['saleBadge']['padding'] );
$sale_badge_border  = isset( $attributes['saleBadge']['border'] ) ? cozy_render_TRBL( 'border', $attributes['saleBadge']['border'] ) : '';
$sale_badge_color   = array(
	'text' => isset( $attributes['saleBadge']['color'] ) ? $attributes['saleBadge']['color'] : '',
	'bg'   => isset( $attributes['saleBadge']['bgColor'] ) ? $attributes['saleBadge']['bgColor'] : '',
);

$cat_padding = cozy_render_TRBL( 'padding', $attributes['categoryStyles']['padding'] );
$cat_border  = isset( $attributes['categoryStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['categoryStyles']['border'] ) : '';
$cat_styles  = array(
	'color'              => isset( $attributes['categoryStyles']['color'] ) ? $attributes['categoryStyles']['color'] : '',
	'color_hover'        => isset( $attributes['categoryStyles']['colorHover'] ) ? $attributes['categoryStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['categoryStyles']['bgColor'] ) ? $attributes['categoryStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['categoryStyles']['bgColorHover'] ) ? $attributes['categoryStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['categoryStyles']['borderColorHover'] ) ? $attributes['categoryStyles']['borderColorHover'] : '',
);

$title_color = array(
	'text'       => isset( $attributes['title']['color'] ) ? $attributes['title']['color'] : '',
	'text_hover' => isset( $attributes['title']['colorHover'] ) ? $attributes['title']['colorHover'] : '',
);

$price_color = array(
	'text' => isset( $attributes['price']['color'] ) ? $attributes['price']['color'] : '',
);

$rating_color = array(
	'text' => isset( $attributes['rating']['color'] ) ? $attributes['rating']['color'] : '',
);

$nav_border = isset( $attributes['navigation']['border'] ) ? cozy_render_TRBL( 'border', $attributes['navigation']['border'] ) : '';
$nav_styles = array(
	'color'              => isset( $attributes['navigation']['color'] ) ? $attributes['navigation']['color'] : '',
	'color_hover'        => isset( $attributes['navigation']['colorHover'] ) ? $attributes['navigation']['colorHover'] : '',
	'bg_color'           => isset( $attributes['navigation']['bgColor'] ) ? $attributes['navigation']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['navigation']['bgColorHover'] ) ? $attributes['navigation']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['navigation']['borderColorHover'] ) ? $attributes['navigation']['borderColorHover'] : '',
);

$bullet_outline = isset( $attributes['pagination']['active']['border'] ) ? cozy_render_TRBL( 'outline', $attributes['pagination']['active']['border'] ) : '';
$bullet_styles  = array(
	'default_color'       => isset( $attributes['pagination']['default']['color'] ) ? $attributes['pagination']['default']['color'] : '',
	'default_color_hover' => isset( $attributes['pagination']['default']['colorHover'] ) ? $attributes['pagination']['default']['colorHover'] : '',
	'active_color'        => isset( $attributes['pagination']['active']['color'] ) ? $attributes['pagination']['active']['color'] : '',
	'active_color_hover'  => isset( $attributes['pagination']['active']['colorHover'] ) ? $attributes['pagination']['active']['colorHover'] : '',
);

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-featured-product-tabs__tab-heading {
	font-size: {$attributes['tabHeading']['fontSize']};
	font-weight: {$attributes['tabHeading']['fontWeight']};
	font-family: {$attributes['tabHeading']['fontFamily']};
	color: {$heading_color['text']};
}

#$block_id .cozy-block-featured-product-tabs__tabs {
	{$separator_padding}
	{$separator_border}
	{$separator_radius}
    gap: {$attributes['tabGap']};
	margin-top: {$attributes['tabStyles']['marginTop']};
	margin-bottom: {$attributes['tabStyles']['marginBottom']};
	background-color: {$separator_styles['bg_color']};
}

#$block_id .cozy-block-featured-product-tabs__tab {
    {$tab_padding}
    {$tab_border_radius}
    {$default_tab_border}
    background-color: {$tab_styles['default_bg_color']};
    color: {$tab_styles['default_color']};
	font-size: {$attributes['tabStyles']['fontSize']};
    font-family: {$attributes['tabStyles']['fontFamily']};
    font-weight: {$attributes['tabStyles']['fontWeight']};
}
#$block_id .cozy-block-featured-product-tabs__tab.active-tab {
    {$active_tab_border}
    background-color: {$tab_styles['active_bg_color']};
    color: {$tab_styles['active_color']};
}
#$block_id.has-tab-overlay .cozy-block-featured-product-tabs__tab.active-tab {
    margin-bottom: -{$active_tab_overlay};
}

#$block_id .cozy-block-featured-product-tabs__icon-wrapper.view-stacked {
	{$icon_box_padding}
	{$icon_box_border}
    border-radius: {$attributes['iconBox']['radius']};
    background-color: {$icon_box_styles['bg_color']};
}
#$block_id .active-tab .cozy-block-featured-product-tabs__icon-wrapper.view-stacked {
    background-color: {$icon_box_styles['bg_color_active']};
    border-color: {$icon_box_styles['border_color_active']};
}
#$block_id .cozy-block-featured-product-tabs__icon {
    width: {$attributes['icon']['size']};
    height: {$attributes['icon']['size']};
}
#$block_id .layout-fill .cozy-block-featured-product-tabs__icon {
    opacity: {$icon_opacity};
    fill: {$tab_styles['default_color']};
    stroke: none;
}
#$block_id .layout-outline .cozy-block-featured-product-tabs__icon {
    stroke: {$tab_styles['default_color']};
    fill: none;
}
#$block_id .active-tab .layout-fill .cozy-block-featured-product-tabs__icon {
    fill: {$tab_styles['active_color']};
    stroke: none;
}
#$block_id .active-tab .layout-outline .cozy-block-featured-product-tabs__icon {
    stroke: {$tab_styles['active_color']};
    fill: none;
}

#$block_id .cozy-block-featured-product-tabs__grid-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
    column-gap: {$attributes['gridOptions']['gap']};
    row-gap: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) { 
    #$block_id .cozy-block-featured-product-tabs__grid-wrapper {
        grid-template-columns: repeat({$column1}, 1fr) !important;
    }
}
@media screen and (max-width: 768px) { 
    #$block_id .cozy-block-featured-product-tabs__grid-wrapper {
        grid-template-columns: repeat({$column2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) { 
    #$block_id .cozy-block-featured-product-tabs__grid-wrapper {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id .cozy-block-featured-product-tabs__list-wrapper .cozy-block-featured-product-tabs__item {
    margin-bottom: {$attributes['listOptions']['gap']};
}

#$block_id.swiper-vertical .swiper-wrapper {
    height: {$attributes['sliderOptions']['height']};
}

#$block_id .cozy-block-featured-product-tabs__item {
	{$item_padding}
	{$item_border}
	border-radius: {$attributes['itemStyles']['radius']};
	background-color: {$item_color['bg']};
	text-align: {$item_text_align};
}
#$block_id.item-has-shadow .cozy-block-featured-product-tabs__item {
	box-shadow: {$attributes['itemStyles']['shadow']['horizontal']}px {$attributes['itemStyles']['shadow']['vertical']}px {$attributes['itemStyles']['shadow']['blur']}px {$attributes['itemStyles']['shadow']['spread']}px {$item_color['shadow']} {$attributes['itemStyles']['shadow']['position']};
}
#$block_id.item-has-shadow .cozy-block-featured-product-tabs__item:hover {
	border-color: {$item_color['border_hover']};
	background-color: {$item_color['bg_hover']};
}

#$block_id .cozy-block-featured-product-tabs__featured-image {
    max-height: {$attributes['imageStyles']['height']};
    max-width: {$attributes['imageStyles']['width']};
}
#$block_id .cozy-block-featured-product-tabs__featured-image img {
    height: {$attributes['imageStyles']['height']};
    {$img_radius}
}

#$block_id .cozy-block-featured-product-tabs__sale-badge {
    {$sale_badge_padding}
    {$sale_badge_border}
    border-radius: {$attributes['saleBadge']['radius']};
    color: {$sale_badge_color['text']};
    background-color: {$sale_badge_color['bg']};
    font-size: {$attributes['saleBadge']['fontSize']};
    font-weight: {$attributes['saleBadge']['fontWeight']};
    font-family: {$attributes['saleBadge']['fontFamily']};
    top: {$attributes['saleBadge']['top']}px;
    transform: rotate({$attributes['saleBadge']['rotate']}deg);
}
#$block_id .cozy-block-featured-product-tabs__sale-badge.position-left {
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id .cozy-block-featured-product-tabs__sale-badge.position-right {
    right: {$attributes['saleBadge']['right']}px;
}

#$block_id .cozy-block-featured-product-tabs__product-categories {
	gap: {$attributes['categoryStyles']['gap']};
	font-size: {$attributes['categoryStyles']['fontSize']};
	font-family: {$attributes['categoryStyles']['fontFamily']};
	font-weight: {$attributes['categoryStyles']['fontWeight']};
	margin-top: {$attributes['categoryStyles']['marginTop']};
	margin-bottom: {$attributes['categoryStyles']['marginBottom']};
}
#$block_id .cozy-block-featured-product-tabs__product-categories a {
	{$cat_padding}
	{$cat_border}
	border-radius: {$attributes['categoryStyles']['radius']};
	color: {$cat_styles['color']};
	background-color: {$cat_styles['bg_color']};
}
#$block_id .cozy-block-featured-product-tabs__product-categories a:hover {
	color: {$cat_styles['color_hover']};
	background-color: {$cat_styles['bg_color_hover']};
	border-color: {$cat_styles['border_color_hover']};
}

#$block_id .cozy-block-featured-product-tabs__product-title {
	margin-top: {$attributes['title']['marginTop']};
	margin-bottom: {$attributes['title']['marginBottom']};
    font-size: {$attributes['title']['fontSize']};
    font-family: {$attributes['title']['fontFamily']};
    font-weight: {$attributes['title']['fontWeight']};
}
#$block_id .cozy-block-featured-product-tabs__product-title a {
	color: {$title_color['text']};
}
#$block_id .cozy-block-featured-product-tabs__product-title a:hover {
	color: {$title_color['text_hover']};
}

#$block_id .cozy-block-featured-product-tabs__product-price {
    margin-top: {$attributes['price']['marginTop']};
    margin-bottom: {$attributes['price']['marginBottom']};
    font-size: {$attributes['price']['fontSize']};
    font-weight: {$attributes['price']['fontWeight']};
    font-family: {$attributes['price']['fontFamily']};
    color: {$price_color['text']};
}

#$block_id .cozy-block-featured-product-tabs__product-rating {
    margin-top: {$attributes['rating']['marginTop']};
    margin-bottom: {$attributes['rating']['marginBottom']};
    font-size: {$attributes['rating']['fontSize']};
    font-weight: {$attributes['rating']['fontWeight']};
    font-family: {$attributes['rating']['fontFamily']};
    color: {$rating_color['text']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
	font-size: {$attributes['navigation']['size']};
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
	width: {$attributes['navigation']['boxWidth']};
	height: {$attributes['navigation']['boxHeight']};
	{$nav_border}
	border-radius: {$attributes['navigation']['radius']};
	color: {$nav_styles['color']};
	background-color: {$nav_styles['bg_color']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
	color: {$nav_styles['color_hover']};
	background-color: {$nav_styles['bg_color_hover']};
	border-color: {$nav_styles['border_color_hover']};
}

#$block_id .swiper-pagination {
	bottom: {$attributes['pagination']['verticalPosition']}px;
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
	width: {$attributes['pagination']['default']['width']};
	height: {$attributes['pagination']['default']['height']};
	border-radius: {$attributes['pagination']['default']['radius']};
	background-color: {$bullet_styles['default_color']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
	width: {$attributes['pagination']['active']['width']};
	height: {$attributes['pagination']['active']['height']};
	border-radius: {$attributes['pagination']['active']['radius']};
	background-color: {$bullet_styles['active_color']};
	{$bullet_outline}
	outline-offset: {$attributes['pagination']['active']['offset']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
	background-color: {$bullet_styles['default_color_hover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
	background-color: {$bullet_styles['active_color_hover']};
}
#$block_id.swiper-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: 0 var(--swiper-pagination-bullet-horizontal-gap, {$attributes['pagination']['gap']});
}
#$block_id.swiper-vertical .swiper-pagination-bullets .swiper-pagination-bullet {
	margin: var(--swiper-pagination-bullet-vertical-gap, {$attributes['pagination']['gap']}) 0;
}
BLOCK_STYLES;

$classes   = array();
$classes[] = 'cozy-block-featured-product-tabs';
$classes[] = 'display-' . $attributes['display'];
$classes[] = $attributes['navigation']['hoverShow'] ? 'nav-hover-show' : '';
$classes[] = $attributes['tabStyles']['active']['tabOverlay'] ? 'has-tab-overlay' : '';
$classes[] = $attributes['itemStyles']['shadow']['enabled'] ? 'item-has-shadow' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

// Enqueue Google Fonts.
if ( isset( $attributes['tabHeading']['fontFamily'] ) && ! empty( $attributes['tabHeading']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['tabHeading']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['tabStyles']['fontFamily'] ) && ! empty( $attributes['tabStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['tabStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['saleBadge']['fontFamily'] ) && ! empty( $attributes['saleBadge']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['saleBadge']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['categoryStyles']['fontFamily'] ) && ! empty( $attributes['categoryStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['categoryStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['title']['fontFamily'] ) && ! empty( $attributes['title']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['title']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['price']['fontFamily'] ) && ! empty( $attributes['price']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['price']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['rating']['fontFamily'] ) && ! empty( $attributes['rating']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['rating']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}

// Tabs.
$inline_styles   = array();
$inline_styles[] = 'display:flex';
$inline_styles[] = 'flex-wrap:wrap';
$inline_styles[] = 'align-items:center';
$inline_styles[] = 'justify-content:' . $attributes['tabJustification'];
$inline_styles[] = 'gap:' . $attributes['tabHeading']['gap'];

$output .= '<div style="' . implode( ';', $inline_styles ) . '">';
if ( $attributes['tabHeading']['enabled'] ) {
	$heading_content = esc_html_x( $attributes['tabHeading']['content'], 'cozy-addons' );
	$output         .= sprintf( '<%1$s class="cozy-block-featured-product-tabs__tab-heading">%2$s</%1$s>', $attributes['tabHeading']['tag'], $heading_content );
}

$output .= '<article class="cozy-block-featured-product-tabs__tabs">';

$cozy_featured_product_tabs = array(
	'latest' => esc_html_x( 'Latest', 'cozy-addons' ),
	'seller' => esc_html_x( 'Best Seller', 'cozy-addons' ),
	'rated'  => esc_html_x( 'Top Rated', 'cozy-addons' ),
	'sale'   => esc_html_x( 'On Sale', 'cozy-addons' ),
);

$set_first_tab = false;
$first_tab     = '';

foreach ( $cozy_featured_product_tabs as $key => $label ) {
	if ( $attributes['enableOptions'][ $key ] ) {
		$active_class = ! $set_first_tab ? ' active-tab' : '';
		if ( ! $set_first_tab ) {
			$first_tab = $key;
		}
		$set_first_tab = true;
		$output       .= '<div class="cozy-block-featured-product-tabs__tab' . $active_class . '" id="' . esc_attr( $key ) . '">';
		if ( $attributes['icon']['enabled'] ) {
			$output .= '<div style="display:flex;flex-wrap:wrap;gap:' . $attributes['icon']['gap'] . ';align-items:center;">';
			if ( 'icon-only' === $attributes['icon']['position'] ) {
				$output .= '<div class="cozy-block-featured-product-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-product-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
			} elseif ( 'before' === $attributes['icon']['position'] ) {
				$output .= '<div class="cozy-block-featured-product-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-product-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
				$output .= '<p>' . $label . '</p>';
			} else {
				$output .= '<p>' . $label . '</p>';
				$output .= '<div class="cozy-block-featured-product-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-product-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
			}
			$output .= '</div>';
		} else {
			$output .= esc_html( $label );
		}
		$output .= '</div>';
	}
}
$output .= '</article>';
$output .= '</div>';
// End Tabs.

// Content.
if ( ! function_exists( 'cozy_fetch_featured_product_tab_data' ) ) {
	function cozy_fetch_featured_product_tab_data( $type, $attributes, &$output ) {
		$per_page = $attributes['perPage'][ $type ] ?? 3;

		$args = array();

		switch ( $type ) {
			case 'seller':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'meta_key'       => 'total_sales',
					'orderby'        => 'total_sales',
					'meta_query'     => array(
						'relation' => 'AND',
						array(
							'key'     => 'total_sales',
							'compare' => 'EXISTS',
						),
						array(
							'key'     => 'total_sales',
							'value'   => '0',
							'compare' => '>',
						),
					),
				);
				break;

			case 'rating':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'meta_key'       => '_wc_average_rating',
					'orderby'        => '_wc_average_rating',
					'meta_query'     => array(
						'relation' => 'AND',
						array(
							'key'     => '_wc_average_rating',
							'compare' => 'EXISTS',
						),
						array(
							'key'     => '_wc_average_rating',
							'value'   => '0',
							'compare' => '>',
						),
					),
				);
				break;

			case 'sale':
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'orderby'        => 'date',
					'meta_query'     => array(
						array(
							'key'     => '_sale_price',
							'value'   => 0,
							'compare' => '>',
							'type'    => 'NUMERIC',
						),
					),
				);
				break;

			default:
				$args = array(
					'post_type'      => 'product',
					'order'          => 'DESC',
					'posts_per_page' => $per_page,
					'orderby'        => 'date',
				);
		}

		$query = new WP_Query( $args );

		if ( ! $query->have_posts() ) {
			return '';
		}

		$products = array();

		while ( $query->have_posts() ) {
			$query->the_post();
			// Get the product object.
			$product = wc_get_product( get_the_ID() );

			$price               = '';
			$discount_amt        = '';
			$discount_percentage = '';
			// Check if the product has a sale price.
			if ( $product->is_on_sale() ) {
				$price         = wc_format_sale_price( $product->get_regular_price(), $product->get_sale_price() );
				$regular_price = $product->get_regular_price();
				$sale_price    = $product->get_sale_price();

				// Check if both regular and sale prices are numeric before calculating discount amount
				if ( is_numeric( $regular_price ) && is_numeric( $sale_price ) ) {
					$discount_amt        = wc_price( $regular_price - $sale_price );
					$discount_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
					$discount_percentage = number_format( $discount_percentage, 1 );
					$discount_percentage = preg_replace( '/\.0+$/', '', $discount_percentage ) . '%';
				}
			} else {
				$price = wc_price( $product->get_regular_price() );
			}

			// Get categories and their links.
			$categories         = get_the_terms(
				get_the_ID(),
				'product_cat'
			);
			$product_categories = array();
			foreach ( $categories as $category ) {
				$product_categories[] = array(
					'name'        => $category->name,
					'link'        => get_category_link( $category->term_id ),
					'count'       => $category->count,
					'description' => $category->description,
					'slug'        => $category->slug,
					'taxonomy'    => $category->taxonomy,
					'parent'      => $category->parent,
				);
			}

			// Check if the product is valid
			if ( $product ) {
				$products[] = array(
					'id'                  => get_the_ID(),
					'image_url'           => get_the_post_thumbnail_url( get_the_ID() ),
					'title'               => get_the_title(),
					'content'             => get_the_content(),
					'link'                => get_permalink(),
					'price'               => $price, // Get the product price.
					'discount_amt'        => $discount_amt,
					'discount_percentage' => $discount_percentage,
					'on_sale'             => $product->is_on_sale(),
					'rating'              => $product->get_average_rating(), // Get the product rating.
					'categories'          => $product_categories,
				);
			}
		}

		wp_reset_postdata();

		// Render Product Data.
		foreach ( $products as $product_data ) {
			$classes   = array();
			$classes[] = 'cozy-block-featured-product-tabs__item';
			$classes[] = 'carousel' === $attributes['display'] ? 'swiper-slide' : '';
			$output   .= '<li class="' . implode( ' ', $classes ) . '">';
			if ( $attributes['productOptions']['image'] ) {
				$classes   = array();
				$classes[] = 'cozy-block-featured-product-tabs__featured-image';
				$classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
				$output   .= '<figure class="' . implode( ' ', $classes ) . '"><a href="' . esc_url( $product_data['link'] ) . '" rel="noopener" target="_blank">';
				$output   .= '<img src="' . esc_url( $product_data['image_url'] ) . '" />';
				if ( $attributes['productOptions']['saleBadge'] && $product_data['on_sale'] ) {
					$classes   = array();
					$classes[] = 'cozy-block-featured-product-tabs__sale-badge';
					$classes[] = 'position-' . $attributes['saleBadge']['position'];
					$output   .= '<span class="' . implode( ' ', $classes ) . '">';
					$output   .= esc_html_x( $attributes['saleBadge']['labelBefore'], 'cozy-addons' );
					switch ( $attributes['saleBadge']['contentType'] ) {
						case 'amount':
							$output .= '<span>' . $product_data['discount_amt'] . '</span>';
							break;

						case 'percentage':
							$output .= $product_data['discount_percentage'];
							break;

						default:
							$output .= esc_html_x( 'Sale', 'cozy-addons' );
					}
					$output .= esc_html_x( $attributes['saleBadge']['labelAfter'], 'cozy-addons' );
					$output .= '</span>';
				}
				$output .= '</a></figure>';
			}

			if ( $attributes['productOptions']['categories'] ) {
				$classes   = array();
				$classes[] = 'cozy-block-featured-product-tabs__product-categories';
				$classes[] = $attributes['categoryStyles']['hoverEffect'] ? 'has-hover-effect' : '';
				$output   .= '<div class="' . implode( ' ', $classes ) . '">';
				foreach ( $product_data['categories'] as $cat_data ) {
					$output .= '<a href="' . esc_url( $cat_data['link'] ) . '" rel="noopener" target="_blank">' . esc_html_x( $cat_data['name'], 'cozy-addons' ) . '</a>';
				}
				$output .= '</div>';
			}

			if ( $attributes['productOptions']['title'] ) {
				$output .= '<h4 class="cozy-block-featured-product-tabs__product-title">';
				$output .= '<a href="' . esc_url( $product_data['link'] ) . '" rel="noopener" target="_blank">' . esc_html_x( $product_data['title'], 'cozy-addons' ) . '</a>';
				$output .= '</h4>';
			}

			if ( $attributes['productOptions']['content'] ) {
				$output .= '<p>' . cozy_create_excerpt( $product_data['content'], $attributes['productOptions']['excerpt'] ) . '</p>';
			}

			$inline_styles   = array();
			$inline_styles[] = 'display:flex';
			$inline_styles[] = 'align-items:center';
			$inline_styles[] = 'justify-content:' . $attributes['priceRatingWrapper']['justifyContent'];
			$inline_styles[] = 'gap:' . $attributes['priceRatingWrapper']['gap'];
			$output         .= '<div style="' . implode( ';', $inline_styles ) . '">';
			if ( $attributes['productOptions']['price'] ) {
				$output .= '<p class="cozy-block-featured-product-tabs__product-price">' . $product_data['price'] . '</p>';
			}
			if ( $attributes['productOptions']['rating'] && 0 < $product_data['rating'] ) {
				$rating_color = array(
					'icon' => isset( $attributes['rating']['iconColor'] ) ? $attributes['rating']['iconColor'] : '',
				);

				$output .= '<p class="cozy-block-featured-product-tabs__product-rating">';
				$output .= '<svg stroke="' . $rating_color['icon'] . '" stroke-width="1.5" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6.65335 1.83265C6.68155 1.76387 6.72957 1.70503 6.7913 1.66362C6.85303 1.62221 6.92568 1.6001 7.00002 1.6001C7.07435 1.6001 7.14701 1.62221 7.20874 1.66362C7.27047 1.70503 7.31849 1.76387 7.34669 1.83265L8.76335 5.23998C8.78987 5.30374 8.83346 5.35894 8.88933 5.39952C8.9452 5.4401 9.01119 5.46448 9.08002 5.46998L12.7587 5.76465C13.0914 5.79131 13.226 6.20665 12.9727 6.42331L10.17 8.82465C10.1177 8.86944 10.0786 8.92778 10.0572 8.99328C10.0358 9.05878 10.0329 9.12891 10.0487 9.19598L10.9054 12.786C10.9226 12.858 10.9181 12.9335 10.8924 13.003C10.8667 13.0724 10.821 13.1327 10.7611 13.1763C10.7012 13.2198 10.6297 13.2445 10.5557 13.2475C10.4817 13.2504 10.4085 13.2313 10.3454 13.1926L7.19535 11.2693C7.13651 11.2335 7.06893 11.2145 7.00002 11.2145C6.93111 11.2145 6.86353 11.2335 6.80469 11.2693L3.65469 13.1933C3.59152 13.232 3.51832 13.2511 3.44432 13.2481C3.37033 13.2452 3.29885 13.2204 3.23893 13.1769C3.17901 13.1334 3.13333 13.0731 3.10765 13.0036C3.08198 12.9342 3.07747 12.8587 3.09469 12.7866L3.95135 9.19598C3.96724 9.12891 3.96432 9.05876 3.94291 8.99325C3.92151 8.92773 3.88244 8.86939 3.83002 8.82465L1.02735 6.42331C0.971228 6.37505 0.930626 6.31128 0.910652 6.24C0.890678 6.16873 0.892224 6.09314 0.915096 6.02274C0.937968 5.95235 0.981145 5.89028 1.0392 5.84436C1.09725 5.79844 1.16758 5.7707 1.24135 5.76465L4.92002 5.46998C4.98885 5.46448 5.05483 5.4401 5.1107 5.39952C5.16657 5.35894 5.21017 5.30374 5.23669 5.23998L6.65335 1.83265Z"/></svg>';
				$output .= '<span style="margin-left:4px">' . number_format( floatval( $product_data['rating'] ), 1 ) . '</span>';
				$output .= '</p>';
			}
			$output .= '</div>';
			$output .= '</li>';
		}
	}
}

$classes   = array();
$classes[] = 'cozy-block-featured-product-tabs__' . $attributes['display'] . '-wrapper';
$classes[] = 'carousel' === $attributes['display'] ? 'swiper-wrapper' : '';
$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
if ( ! function_exists( 'cozy_render_first_featured_product_tab_content' ) ) {
	function cozy_render_first_featured_product_tab_content( $first_tab, $attributes, &$output ) {
		return cozy_fetch_featured_product_tab_data( $first_tab, $attributes, $output );
	}
}

// Example usage
$output .= cozy_render_first_featured_product_tab_content( $first_tab, $attributes, $output );
$output .= '</ul>';
// End Content.

if ( 'carousel' === $attributes['display'] ) {
	if ( $attributes['navigation']['enabled'] ) {
		$output .= '<div class="swiper-button-prev"></div><div class="swiper-button-next"></div>';
	}
	if ( $attributes['pagination']['enabled'] ) {
		$output .= '<div class="swiper-pagination"></div>';
	}
}

// Spinner.
$output .= '<div class="spinner display-none"></div>';

$output .= '</div>';

$render = sprintf( '<div class="cozy-block-wrapper cozy-block-featured-product-tabs-wrapper"><div %1$s><style>%2$s</style> %3$s</div></div>', $wrapper_attributes, $block_styles, $output );
echo $render;
