<?php
$client_id = ! empty( $attributes['clientId'] ) ? $attributes['clientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['siteURL'] = site_url();

wp_localize_script( 'cozy-block-scripts', $block_id, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductTab( "' . $client_id . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$tab_header_padding       = cozy_render_TRBL( 'padding', $attributes['separatorStyles']['padding'] );
$tab_header_margin        = cozy_render_TRBL( 'margin', $attributes['separatorStyles']['margin'] );
$tab_header_border_radius = cozy_render_TRBL( 'border-radius', $attributes['separatorStyles']['borderRadius'] );
$tab_header_border        = isset( $attributes['separatorStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['separatorStyles']['border'] ) : '';
$tab_header_color         = array(
	'bg' => isset( $attributes['separatorStyles']['bgColor'] ) ? $attributes['separatorStyles']['bgColor'] : '',
);

$tab_padding        = cozy_render_TRBL( 'padding', $attributes['tabStyles']['padding'] );
$tab_border_radius  = cozy_render_TRBL( 'border-radius', $attributes['tabStyles']['borderRadius'] );
$default_tab_border = isset( $attributes['tabStyles']['default']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['default']['border'] ) : '';
$active_tab_border  = isset( $attributes['tabStyles']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['active']['border'] ) : '';
$tab_color          = array(
	'title'       => isset( $attributes['tabStyles']['titleColor'] ) ? $attributes['tabStyles']['titleColor'] : '',
	'text'        => isset( $attributes['tabStyles']['default']['color'] ) ? $attributes['tabStyles']['default']['color'] : '',
	'bg'          => isset( $attributes['tabStyles']['default']['bgColor'] ) ? $attributes['tabStyles']['default']['bgColor'] : '',
	'active_text' => isset( $attributes['tabStyles']['active']['color'] ) ? $attributes['tabStyles']['active']['color'] : '',
	'active_bg'   => isset( $attributes['tabStyles']['active']['bgColor'] ) ? $attributes['tabStyles']['active']['bgColor'] : '',
);

$active_tab_overlay = isset( $attributes['separatorStyles']['border']['bottom']['width'], $attributes['separatorStyles']['border']['bottom']['style'] ) ? $attributes['separatorStyles']['border']['bottom']['width'] : '';

$item_box = array(
	'padding'      => isset( $attributes['itemBoxStyles']['padding'] ) ? cozy_render_TRBL( 'padding', $attributes['itemBoxStyles']['padding'] ) : '',
	'margin'       => array(
		'top'    => isset( $attributes['itemBoxStyles']['margin']['top'] ) ? $attributes['itemBoxStyles']['margin']['top'] : '',
		'bottom' => isset( $attributes['itemBoxStyles']['margin']['bottom'] ) ? $attributes['itemBoxStyles']['margin']['bottom'] : '',
	),
	'border'       => isset( $attributes['itemBoxStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['itemBoxStyles']['border'] ) : '',
	'radius'       => isset( $attributes['itemBoxStyles']['radius'] ) ? $attributes['itemBoxStyles']['radius'] : '',
	'bg'           => isset( $attributes['itemBoxStyles']['color']['bg'] ) ? $attributes['itemBoxStyles']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['itemBoxStyles']['color']['bgHover'] ) ? $attributes['itemBoxStyles']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['itemBoxStyles']['color']['borderHover'] ) ? $attributes['itemBoxStyles']['color']['borderHover'] : '',
	'shadow'       => array(
		'horizontal' => isset( $attributes['itemBoxStyles']['shadow']['horizontal'] ) ? $attributes['itemBoxStyles']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemBoxStyles']['shadow']['vertical'] ) ? $attributes['itemBoxStyles']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['itemBoxStyles']['shadow']['blur'] ) ? $attributes['itemBoxStyles']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['itemBoxStyles']['shadow']['spread'] ) ? $attributes['itemBoxStyles']['shadow']['spread'] : '',
		'color'      => isset( $attributes['itemBoxStyles']['shadow']['color'] ) ? $attributes['itemBoxStyles']['shadow']['color'] : '',
		'position'   => isset( $attributes['itemBoxStyles']['shadow']['position'] ) ? $attributes['itemBoxStyles']['shadow']['position'] : '',
	),
	'shadow_hover' => array(
		'horizontal' => isset( $attributes['itemBoxStyles']['shadowHover']['horizontal'] ) ? $attributes['itemBoxStyles']['shadowHover']['horizontal'] : '',
		'vertical'   => isset( $attributes['itemBoxStyles']['shadowHover']['vertical'] ) ? $attributes['itemBoxStyles']['shadowHover']['vertical'] : '',
		'blur'       => isset( $attributes['itemBoxStyles']['shadowHover']['blur'] ) ? $attributes['itemBoxStyles']['shadowHover']['blur'] : '',
		'spread'     => isset( $attributes['itemBoxStyles']['shadowHover']['spread'] ) ? $attributes['itemBoxStyles']['shadowHover']['spread'] : '',
		'color'      => isset( $attributes['itemBoxStyles']['shadowHover']['color'] ) ? $attributes['itemBoxStyles']['shadowHover']['color'] : '',
		'position'   => isset( $attributes['itemBoxStyles']['shadowHover']['position'] ) ? $attributes['itemBoxStyles']['shadowHover']['position'] : '',
	),
);

$sale_badge_padding = cozy_render_TRBL( 'padding', $attributes['saleBadge']['padding'] );
$sale_badge_color   = array(
	'text' => isset( $attributes['saleBadge']['color'] ) ? $attributes['saleBadge']['color'] : '',
	'bg'   => isset( $attributes['saleBadge']['bgColor'] ) ? $attributes['saleBadge']['bgColor'] : '',
);

$product_title_color = array(
	'text'       => isset( $attributes['productName']['color'] ) ? $attributes['productName']['color'] : '',
	'text_hover' => isset( $attributes['productName']['colorHover'] ) ? $attributes['productName']['colorHover'] : '',
);

$price_color = array(
	'text' => isset( $attributes['productPrice']['color'] ) ? $attributes['productPrice']['color'] : '',
);

$rating_color = array(
	'text' => isset( $attributes['productRating']['color'] ) ? $attributes['productRating']['color'] : '',
);

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block__product-tabs {
    gap: {$attributes['tabGap']};
    font-size: {$attributes['tabStyles']['fontSize']};
    font-family: {$attributes['tabStyles']['fontFamily']};
    font-weight: {$attributes['tabStyles']['fontWeight']};
}

#$block_id .cozy-block-product-tab__header {
    {$tab_header_padding}
    {$tab_header_margin}
    {$tab_header_border_radius}
    {$tab_header_border}
    background-color: {$tab_header_color['bg']};
}

#$block_id .cozy-block-product-tab__title {
    font-size: {$attributes['tabStyles']['titleFontSize']};
    font-weight: {$attributes['tabStyles']['titleFontWeight']};
    font-family: {$attributes['tabStyles']['titleFontFamily']};
    color: {$tab_color['title']};
}

#$block_id .cozy-block__product-tab {
    {$tab_padding}
    {$tab_border_radius}
    {$default_tab_border}
    color: {$tab_color['text']};
    background-color: {$tab_color['bg']};
}
#$block_id .cozy-block__product-tab.active-tab {
    {$active_tab_border}
    color: {$tab_color['active_text']};
    background-color: {$tab_color['active_bg']};
}
#$block_id.has-tab-overlay .cozy-block__product-tab.active-tab {
    margin-bottom: -{$active_tab_overlay};
}

#$block_id:not(.has-masonry) .cozy-block__product-tab-content {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
    grid-gap: {$attributes['gridOptions']['gap']};
}
#$block_id.has-masonry .cozy-block__product-tab-content {
    column-count: {$attributes['gridOptions']['columnCount']};
    column-gap: {$attributes['gridOptions']['gap']};
}
#$block_id.has-masonry .cozy-block__product-tab-content .cozy-block-product {
    margin-bottom: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) {
    #$block_id:not(.has-masonry) .cozy-block__product-tab-content {
        grid-template-columns: repeat(
            $column1,
            1fr
        ) !important;
    }
    #$block_id.has-masonry .cozy-block__product-tab-content {
        column-count: $column1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id:not(.has-masonry) .cozy-block__product-tab-content {
        grid-template-columns: repeat(
            $column2,
            1fr
        ) !important;
    }
    #$block_id.has-masonry .cozy-block__product-tab-content {
        column-count: $column2 !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id:not(.has-masonry) .cozy-block__product-tab-content {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }
    #$block_id.has-masonry .cozy-block__product-tab-content {
        column-count: 1 !important;
    }
}

#$block_id .cozy-block__product-tab-content .cozy-block-product {
    text-align: {$attributes['textAlign']};
	{$item_box['padding']}
	margin-top: {$item_box['margin']['top']};
	margin-bottom: {$item_box['margin']['bottom']};
	{$item_box['border']}
	border-radius: {$item_box['radius']};
	background-color: {$item_box['bg']};
}
#$block_id .cozy-block__product-tab-content.has-box-shadow .cozy-block-product {
	box-shadow: {$item_box['shadow']['horizontal']}px {$item_box['shadow']['vertical']}px {$item_box['shadow']['blur']}px {$item_box['shadow']['spread']}px {$item_box['shadow']['color']} {$item_box['shadow']['position']};
}
#$block_id .cozy-block__product-tab-content .cozy-block-product:hover {
	background-color: {$item_box['bg_hover']};
	border-color: {$item_box['border_hover']};
}
#$block_id .cozy-block__product-tab-content.has-box-shadow .cozy-block-product:hover {
	box-shadow: {$item_box['shadow_hover']['horizontal']}px {$item_box['shadow_hover']['vertical']}px {$item_box['shadow_hover']['blur']}px {$item_box['shadow_hover']['spread']}px {$item_box['shadow_hover']['color']} {$item_box['shadow_hover']['position']};
}

#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image img {
    height: {$attributes['imageStyles']['height']};
}

#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image .cozy-sale-badge {
    {$sale_badge_padding}
    top: {$attributes['saleBadge']['top']}px;
    border-width: {$attributes['saleBadge']['border']['width']};
    border-style: {$attributes['saleBadge']['border']['style']};
    border-color: {$attributes['saleBadge']['border']['color']};
    border-radius: {$attributes['saleBadge']['borderRadius']};
    transform: rotate({$attributes['saleBadge']['rotate']}deg);
    color: {$sale_badge_color['text']};
    background-color: {$sale_badge_color['bg']};
    font-size: {$attributes['saleBadge']['fontSize']};
    font-family: {$attributes['saleBadge']['fontFamily']};
    font-weight: {$attributes['saleBadge']['fontWeight']};
}
#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image .cozy-sale-badge.position-left {
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id .cozy-block__product-tab-content .cozy-block-product-tab__product-image .cozy-sale-badge.position-right {
    right: {$attributes['saleBadge']['right']}px;
}

#$block_id .cozy-block-product-tab__product-title {
    margin-top: {$attributes['productName']['marginTop']} !important;
    margin-bottom: {$attributes['productName']['marginBottom']} !important;
}
#$block_id .cozy-block-product-tab__product-title > a {
    font-size: {$attributes['productName']['fontSize']};
    font-weight: {$attributes['productName']['fontWeight']};
    font-family: {$attributes['productName']['fontFamily']};
    color: {$product_title_color['text']};
}
#$block_id .cozy-block-product-tab__product-title:hover > a {
    color: {$product_title_color['text_hover']};
}

#$block_id .cozy-block-product-tab__product-price {
    margin-top: {$attributes['productPrice']['marginTop']};
    margin-bottom: {$attributes['productPrice']['marginBottom']};
    font-size: {$attributes['productPrice']['fontSize']};
    font-weight: {$attributes['productPrice']['fontWeight']};
    font-family: {$attributes['productPrice']['fontFamily']};
    color: {$price_color['text']};
}

#$block_id .cozy-block-product-tab__product-rating {
    margin-top: {$attributes['productRating']['marginTop']};
    margin-bottom: {$attributes['productRating']['marginBottom']};
    font-size: {$attributes['productRating']['fontSize']};
    font-weight: {$attributes['productRating']['fontWeight']};
    font-family: {$attributes['productRating']['fontFamily']};
    color: {$rating_color['text']};
}
BLOCK_STYLES;

$classes   = array();
$classes[] = 'cozy-block-product-tab';
$classes[] = $attributes['tabStyles']['active']['tabOverlay'] ? 'has-tab-overlay' : '';
$classes[] = $attributes['gridOptions']['masonry'] ? 'has-masonry' : '';
$output    = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';
$output   .= '<div class="spinner display-none"></div>';
if ( isset( $attributes['tabStyles']['titleFontFamily'] ) && ! empty( $attributes['tabStyles']['titleFontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['tabStyles']['titleFontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['tabStyles']['fontFamily'] ) && ! empty( $attributes['tabStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['tabStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['saleBadge']['fontFamily'] ) && ! empty( $attributes['saleBadge']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['saleBadge']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['productName']['fontFamily'] ) && ! empty( $attributes['productName']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['productName']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['productPrice']['fontFamily'] ) && ! empty( $attributes['productPrice']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['productPrice']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['productRating']['fontFamily'] ) && ! empty( $attributes['productRating']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['productRating']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}

// Tab.
$inlne_styles    = array();
$inline_styles[] = 'display:flex';
$inline_styles[] = 'justify-content:' . $attributes['titleJustify'];
$inline_styles[] = 'align-items:center';
$inline_styles[] = 'gap:' . $attributes['titleGap'];
$inline_styles[] = 'margin-bottom:' . $attributes['contentGap'];
$output         .= '<article class="cozy-block-product-tab__header" style="' . implode( ';', $inline_styles ) . '">';
if ( $attributes['enableTitle'] ) {
	$output .= '<' . $attributes['titleTag'] . ' class="cozy-block-product-tab__title">' . esc_html_x( $attributes['title'], 'cozy-addons' ) . '</' . $attributes['titleTag'] . '>';
}
$output              .= '<ul class="cozy-block__product-tabs">';
$initial_tab_category = '';
foreach ( (array) $attributes['tabs'] as $key => $tab_data ) {
	$active_tab_class = '';
	if ( 0 === $key ) {
		$active_tab_class     = ' active-tab';
		$initial_tab_category = $tab_data['category'];
	}
	$output .= '<li class="cozy-block__product-tab' . $active_tab_class . '" id="' . $tab_data['id'] . '" data-index="' . $key . '" data-product-category="' . $tab_data['category'] . '">';
	$output .= esc_html_x( $tab_data['title'], 'cozy-addons' );
	$output .= '</li>';
}
$output .= '</ul>';
$output .= '</article>';

// Tab Content.
$classes   = array();
$classes[] = 'cozy-block__product-tab-content';
$classes[] = isset( $attributes['itemBoxStyles']['shadow']['enabled'] ) ? 'has-box-shadow' : '';
$classes[] = isset( $attributes['itemBoxStyles']['shadowHover']['enabled'] ) ? 'has-hover-box-shadow' : '';
$classes[] = isset( $attributes['itemBoxStyles']['hoverEffect'] ) ? 'has-hover-effect' : '';
$output   .= '<div class="' . implode( ' ', $classes ) . '">';
$args      = array(
	'post_type'      => 'product', // Adjust to your custom post type if necessary.
	'tax_query'      => array(
		array(
			'taxonomy' => 'product_cat', // Adjust to your custom taxonomy if necessary.
			'field'    => 'term_id',
			'terms'    => $initial_tab_category,
		),
	),
	'posts_per_page' => $attributes['perPage'],
	'order'          => 'DESC',
	'order_by'       => 'date',
);

$query = new WP_Query( $args );

if ( ! $query->have_posts() ) {
	return new WP_Error( 'no_products', 'No products found', array( 'status' => 404 ) );
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
		);
	}
}

wp_reset_postdata();

foreach ( $products as $product_data ) {
	$output .= '<div class="cozy-block-product">';
	if ( $attributes['enableOptions']['productImage'] ) {
		$figure_classes   = array();
		$figure_classes[] = 'cozy-block-product-tab__product-image';
		$figure_classes[] = $attributes['imageStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$figure_classes[] = $attributes['imageStyles']['linkProduct'] ? 'has-link' : '';
		$output          .= '<figure class="' . implode( ' ', $figure_classes ) . '">';
		if ( $attributes['imageStyles']['linkProduct'] ) {
			$output .= '<a href="' . esc_url( $product_data['link'] ) . '" target="_blank" rel="noopener">';
		}
		$output .= '<img src="' . esc_url( $product_data['image_url'] ) . '" />';
		if ( $attributes['enableOptions']['productPrice'] && $attributes['enableOptions']['saleBadge'] && $product_data['on_sale'] ) {
			$sale_badge_classes   = array();
			$sale_badge_classes[] = 'cozy-sale-badge';
			$sale_badge_classes[] = 'position-' . $attributes['saleBadge']['position'];
			$output              .= '<span class="' . implode( ' ', $sale_badge_classes ) . '">';
			$output              .= esc_html_x( $attributes['saleBadge']['labelBefore'], 'cozy-addons' );
			switch ( $attributes['saleBadge']['contentType'] ) {
				case 'percentage':
					$output .= esc_html_x( $product_data['discount_percentage'], 'cozy-addons' );
					break;

				case 'amount':
					$output .= esc_html_x( $product_data['discount_amt'], 'cozy-addons' );
					break;

				default:
					$output .= esc_html_x( 'Sale', 'cozy-addons' );
			}

			$output .= esc_html_x( $attributes['saleBadge']['labelAfter'], 'cozy-addons' );
			$output .= '</span>';
		}
		if ( $attributes['imageStyles']['linkProduct'] ) {
			$output .= '</a>';
		}
		$output .= '</figure>';
	}

	if ( $attributes['enableOptions']['productName'] ) {
		$output .= '<h4 class="cozy-block-product-tab__product-title"><a href="' . esc_url( $product_data['link'] ) . '" target="_blank" rel="noopener">' . esc_html_x( $product_data['title'], 'cozy-addons' ) . '</a></h4>';
	}

	if ( $attributes['enableOptions']['productSummary'] ) {
		$output .= '<p>' . cozy_create_excerpt( $product_data['content'], $attributes['excerpt'] ) . '</p>';
	}

	$flex_div = $attributes['enableOptions']['productPrice'] && $attributes['enableOptions']['productRating'] ? 'cozy-block-product-tab__display-flex' : '';
	$output  .= '<div class="' . $flex_div . '">';
	if ( $attributes['enableOptions']['productPrice'] ) {
		$output .= '<p class="cozy-block-product-tab__product-price">' . $product_data['price'] . '</p>';
	}
	if ( $attributes['enableOptions']['productRating'] && 0 != $product_data['rating'] ) {
		$output .= '<div class="cozy-block-product-tab__product-rating">';
		$output .= '<svg stroke="' . $attributes['productRating']['iconColor'] . '" stroke-width="1.5" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">';
		$output .= '<path d="M6.65335 1.83265C6.68155 1.76387 6.72957 1.70503 6.7913 1.66362C6.85303 1.62221 6.92568 1.6001 7.00002 1.6001C7.07435 1.6001 7.14701 1.62221 7.20874 1.66362C7.27047 1.70503 7.31849 1.76387 7.34669 1.83265L8.76335 5.23998C8.78987 5.30374 8.83346 5.35894 8.88933 5.39952C8.9452 5.4401 9.01119 5.46448 9.08002 5.46998L12.7587 5.76465C13.0914 5.79131 13.226 6.20665 12.9727 6.42331L10.17 8.82465C10.1177 8.86944 10.0786 8.92778 10.0572 8.99328C10.0358 9.05878 10.0329 9.12891 10.0487 9.19598L10.9054 12.786C10.9226 12.858 10.9181 12.9335 10.8924 13.003C10.8667 13.0724 10.821 13.1327 10.7611 13.1763C10.7012 13.2198 10.6297 13.2445 10.5557 13.2475C10.4817 13.2504 10.4085 13.2313 10.3454 13.1926L7.19535 11.2693C7.13651 11.2335 7.06893 11.2145 7.00002 11.2145C6.93111 11.2145 6.86353 11.2335 6.80469 11.2693L3.65469 13.1933C3.59152 13.232 3.51832 13.2511 3.44432 13.2481C3.37033 13.2452 3.29885 13.2204 3.23893 13.1769C3.17901 13.1334 3.13333 13.0731 3.10765 13.0036C3.08198 12.9342 3.07747 12.8587 3.09469 12.7866L3.95135 9.19598C3.96724 9.12891 3.96432 9.05876 3.94291 8.99325C3.92151 8.92773 3.88244 8.86939 3.83002 8.82465L1.02735 6.42331C0.971228 6.37505 0.930626 6.31128 0.910652 6.24C0.890678 6.16873 0.892224 6.09314 0.915096 6.02274C0.937968 5.95235 0.981145 5.89028 1.0392 5.84436C1.09725 5.79844 1.16758 5.7707 1.24135 5.76465L4.92002 5.46998C4.98885 5.46448 5.05483 5.4401 5.1107 5.39952C5.16657 5.35894 5.21017 5.30374 5.23669 5.23998L6.65335 1.83265Z" stroke-linecap="round" stroke-linejoin="round"  />';
		$output .= '</svg>';
		$output .= '<span>' . number_format( floatval( $product_data['rating'] ), 1 ) . '</span>';
		$output .= '</div>';
	}
	$output .= '</div>';

	$output .= '</div>';
}
$output .= '</div>';

$output .= '</div>';

$render = sprintf( '<div class="cozy-block-wrapper"><div %1$s><style>%2$s</style> %3$s</div></div>', $wrapper_attributes, $block_styles, $output );
echo $render;
