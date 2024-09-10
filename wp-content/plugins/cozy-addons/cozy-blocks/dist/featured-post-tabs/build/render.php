<?php
$client_id = ! empty( $attributes['clientId'] ) ? $attributes['clientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['siteURL'] = site_url();

wp_localize_script( 'cozy-block-scripts', $block_id, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockFeaturedPostTabs( "' . $client_id . '" ) }) ' );

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'cozy-block-featured-post-tabs';
$classes[] = 'display-' . $attributes['display'];
$classes[] = $attributes['tabStyles']['active']['tabOverlay'] ? 'has-tab-overlay' : '';
$classes[] = $attributes['postBoxStyles']['shadow']['enabled'] ? 'post-box-has-shadow' : '';

$separator_padding = cozy_render_TRBL( 'padding', $attributes['separatorStyles']['padding'] );
$separator_border  = isset( $attributes['separatorStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['separatorStyles']['border'] ) : '';
$separator_radius  = isset( $attributes['separatorStyles']['radius'] ) ? cozy_render_TRBL( 'border-radius', $attributes['separatorStyles']['radius'] ) : '';
$separator_styles  = array(
	'bg_color' => isset( $attributes['separatorStyles']['bgColor'] ) ? $attributes['separatorStyles']['bgColor'] : '',
);

$tab_padding        = cozy_render_TRBL( 'padding', $attributes['tabStyles']['padding'] );
$tab_border_radius  = cozy_render_TRBL( 'border-radius', $attributes['tabStyles']['borderRadius'] );
$default_tab_border = isset( $attributes['tabStyles']['default']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['default']['border'] ) : '';
$active_tab_border  = isset( $attributes['tabStyles']['active']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tabStyles']['active']['border'] ) : '';
$tab_styles         = array(
	'default_color'    => isset( $attributes['tabStyles']['default']['color'] ) ? $attributes['tabStyles']['default']['color'] : '',
	'default_bg_color' => isset( $attributes['tabStyles']['default']['bgColor'] ) ? $attributes['tabStyles']['default']['bgColor'] : '',
	'active_color'     => isset( $attributes['tabStyles']['active']['color'] ) ? $attributes['tabStyles']['active']['color'] : '',
	'active_bg_color'  => isset( $attributes['tabStyles']['active']['bgColor'] ) ? $attributes['tabStyles']['active']['bgColor'] : '',
);

$active_tab_overlay = isset( $attributes['separatorStyles']['border']['bottom']['width'] ) ? $attributes['separatorStyles']['border']['bottom']['width'] : '';

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

$cat_padding = cozy_render_TRBL( 'padding', $attributes['categoryStyles']['padding'] );
$cat_border  = isset( $attributes['categoryStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['categoryStyles']['border'] ) : '';
$cat_styles  = array(
	'color'              => isset( $attributes['categoryStyles']['color'] ) ? $attributes['categoryStyles']['color'] : '',
	'color_hover'        => isset( $attributes['categoryStyles']['colorHover'] ) ? $attributes['categoryStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['categoryStyles']['bgColor'] ) ? $attributes['categoryStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['categoryStyles']['bgColorHover'] ) ? $attributes['categoryStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['categoryStyles']['borderColorHover'] ) ? $attributes['categoryStyles']['borderColorHover'] : '',
);

$title_styles = array(
	'color'       => isset( $attributes['titleStyles']['color'] ) ? $attributes['titleStyles']['color'] : '',
	'color_hover' => isset( $attributes['titleStyles']['colorHover'] ) ? $attributes['titleStyles']['colorHover'] : '',
);

$date_padding = cozy_render_TRBL( 'padding', $attributes['dateStyles']['padding'] );
$date_border  = isset( $attributes['dateStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['dateStyles']['border'] ) : '';
$date_styles  = array(
	'color'              => isset( $attributes['dateStyles']['color'] ) ? $attributes['dateStyles']['color'] : '',
	'color_hover'        => isset( $attributes['dateStyles']['colorHover'] ) ? $attributes['dateStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['dateStyles']['bgColor'] ) ? $attributes['dateStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['dateStyles']['bgColorHover'] ) ? $attributes['dateStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['dateStyles']['borderColorHover'] ) ? $attributes['dateStyles']['borderColorHover'] : '',
);

$tag_box_padding = cozy_render_TRBL( 'padding', $attributes['tagStyles']['boxPadding'] );
$tag_padding     = cozy_render_TRBL( 'padding', $attributes['tagStyles']['padding'] );
$tag_border      = isset( $attributes['tagStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['tagStyles']['border'] ) : '';
$tag_styles      = array(
	'color'              => isset( $attributes['tagStyles']['color'] ) ? $attributes['tagStyles']['color'] : '',
	'color_hover'        => isset( $attributes['tagStyles']['colorHover'] ) ? $attributes['tagStyles']['colorHover'] : '',
	'bg_color'           => isset( $attributes['tagStyles']['bgColor'] ) ? $attributes['tagStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['tagStyles']['bgColorHover'] ) ? $attributes['tagStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['tagStyles']['borderColorHover'] ) ? $attributes['tagStyles']['borderColorHover'] : '',
);

$post_box_padding = cozy_render_TRBL( 'padding', $attributes['postBoxStyles']['padding'] );
$post_box_border  = isset( $attributes['postBoxStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['postBoxStyles']['border'] ) : '';
$post_box_styles  = array(
	'bg_color'           => isset( $attributes['postBoxStyles']['bgColor'] ) ? $attributes['postBoxStyles']['bgColor'] : '',
	'bg_color_hover'     => isset( $attributes['postBoxStyles']['bgColorHover'] ) ? $attributes['postBoxStyles']['bgColorHover'] : '',
	'border_color_hover' => isset( $attributes['postBoxStyles']['borderColorHover'] ) ? $attributes['postBoxStyles']['borderColorHover'] : '',
);

$column1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$column2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-featured-post-tabs__tabs {
	{$separator_padding}
	{$separator_border}
	{$separator_radius}
    justify-content: {$attributes['tabJustification']};
    gap: {$attributes['tabGap']};
	margin-top: {$attributes['tabStyles']['marginTop']};
	margin-bottom: {$attributes['tabStyles']['marginBottom']};
	background-color: {$separator_styles['bg_color']};
}

#$block_id .cozy-block-featured-post-tabs__tab {
    {$tab_padding}
    {$tab_border_radius}
    {$default_tab_border}
    background-color: {$tab_styles['default_bg_color']};
    color: {$tab_styles['default_color']};
	font-size: {$attributes['tabStyles']['fontSize']};
    font-family: {$attributes['tabStyles']['fontFamily']};
    font-weight: {$attributes['tabStyles']['fontWeight']};
}
#$block_id .cozy-block-featured-post-tabs__tab.active-tab {
    {$active_tab_border}
    background-color: {$tab_styles['active_bg_color']};
    color: {$tab_styles['active_color']};
}
#$block_id.has-tab-overlay .cozy-block-featured-post-tabs__tab.active-tab {
    margin-bottom: -{$active_tab_overlay};
}

#$block_id .cozy-block-featured-post-tabs__icon-wrapper.view-stacked {
	{$icon_box_padding}
	{$icon_box_border}
    border-radius: {$attributes['iconBox']['radius']};
    background-color: {$icon_box_styles['bg_color']};
}
#$block_id .active-tab .cozy-block-featured-post-tabs__icon-wrapper.view-stacked {
    background-color: {$icon_box_styles['bg_color_active']};
    border-color: {$icon_box_styles['border_color_active']};
}
#$block_id .cozy-block-featured-post-tabs__icon {
    width: {$attributes['icon']['size']};
    height: {$attributes['icon']['size']};
}
#$block_id .layout-fill .cozy-block-featured-post-tabs__icon {
    opacity: {$icon_opacity};
    fill: {$tab_styles['default_color']};
    stroke: none;
}
#$block_id .layout-outline .cozy-block-featured-post-tabs__icon {
    stroke: {$tab_styles['default_color']};
    fill: none;
}
#$block_id .active-tab .layout-fill .cozy-block-featured-post-tabs__icon {
    fill: {$tab_styles['active_color']};
    stroke: none;
}
#$block_id .active-tab .layout-outline .cozy-block-featured-post-tabs__icon {
    stroke: {$tab_styles['active_color']};
    fill: none;
}

#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper,
#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper,
#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper {
	grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
	row-gap: {$attributes['gridOptions']['gap']};
	column-gap: {$attributes['gridOptions']['gap']};
}
@media screen and (max-width: 1024px) {
	#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper,
	#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper,
#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper {
		grid-template-columns: repeat(
				$column1,
				1fr
			) !important;
	}
}

@media screen and (max-width: 767px) {
	#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper,
	#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper,
#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper {
		grid-template-columns: repeat(
				$column2,
				1fr
			) !important;
	}
}

@media screen and (max-width: 400px) {
	#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper,
	#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper,
#{$block_id}.display-grid .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper {
		grid-template-columns: repeat(
				1,
				1fr
			) !important;
	}
}

#{$block_id}.display-list .cozy-block-featured-post-tabs__content {
	margin-bottom: {$attributes['listOptions']['gap']};
}

#{$block_id} .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper .cozy-block-featured-post-tabs__content,
#{$block_id} .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper .cozy-block-featured-post-tabs__content,
#{$block_id} .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper .cozy-block-featured-post-tabs__content {
	{$post_box_padding}
	{$post_box_border}
	border-radius: {$attributes['postBoxStyles']['radius']};
	background-color: {$post_box_styles['bg_color']};
}
#{$block_id} .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper .cozy-block-featured-post-tabs__content:hover,
#{$block_id} .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper .cozy-block-featured-post-tabs__content:hover,
#{$block_id} .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper .cozy-block-featured-post-tabs__content:hover {
	background-color: {$post_box_styles['bg_color_hover']};
	border-color: {$post_box_styles['border_color_hover']};
}
#{$block_id}.post-box-has-shadow .cozy-block-featured-post-tabs__content-wrapper > .latest-wrapper .cozy-block-featured-post-tabs__content,
#{$block_id}.post-box-has-shadow .cozy-block-featured-post-tabs__content-wrapper > .popular-wrapper .cozy-block-featured-post-tabs__content,
#{$block_id}.post-box-has-shadow .cozy-block-featured-post-tabs__content-wrapper > .trending-wrapper .cozy-block-featured-post-tabs__content {
	box-shadow: {$attributes['postBoxStyles']['shadow']['horizontal']}px {$attributes['postBoxStyles']['shadow']['vertical']}px {$attributes['postBoxStyles']['shadow']['blur']}px {$attributes['postBoxStyles']['shadow']['spread']}px {$attributes['postBoxStyles']['shadow']['color']} {$attributes['postBoxStyles']['shadow']['position']};
}
  
#{$block_id} .cozy-block-featured-post-tabs__post-image  {
	max-height: {$attributes['imageStyles']['height']};
	min-width: {$attributes['imageStyles']['width']};
}
#{$block_id} .cozy-block-featured-post-tabs__post-image img {
	height: {$attributes['imageStyles']['height']};
	border-radius: {$attributes['imageStyles']['radius']};
}

#$block_id .cozy-block-featured-post-tabs__post-categories {
	gap: {$attributes['categoryStyles']['gap']};
	font-size: {$attributes['categoryStyles']['fontSize']};
	font-family: {$attributes['categoryStyles']['fontFamily']};
	font-weight: {$attributes['categoryStyles']['fontWeight']};
	margin-top: {$attributes['categoryStyles']['marginTop']};
	margin-bottom: {$attributes['categoryStyles']['marginBottom']};
}
#$block_id .cozy-block-featured-post-tabs__post-categories a {
	{$cat_padding}
	{$cat_border}
	border-radius: {$attributes['categoryStyles']['radius']};
	color: {$cat_styles['color']};
	background-color: {$cat_styles['bg_color']};
}
#$block_id .cozy-block-featured-post-tabs__post-categories a:hover {
	color: {$cat_styles['color_hover']};
	background-color: {$cat_styles['bg_color_hover']};
	border-color: {$cat_styles['border_color_hover']};
}

#$block_id .cozy-block-featured-post-tabs__post-title {
	margin-top: {$attributes['titleStyles']['marginTop']};
	margin-bottom: {$attributes['titleStyles']['marginBottom']};
    font-size: {$attributes['titleStyles']['fontSize']};
    font-family: {$attributes['titleStyles']['fontFamily']};
    font-weight: {$attributes['titleStyles']['fontWeight']};
}
#$block_id .cozy-block-featured-post-tabs__post-title a {
	color: {$title_styles['color']};
}
#$block_id .cozy-block-featured-post-tabs__post-title a:hover {
	color: {$title_styles['color_hover']};
}

#$block_id .cozy-block-featured-post-tabs__post-date {
	margin-top: {$attributes['dateStyles']['marginTop']};
	margin-bottom: {$attributes['dateStyles']['marginBottom']};
}
#$block_id .cozy-block-featured-post-tabs__post-date a {
	{$date_padding}
	{$date_border}
	border-radius: {$attributes['dateStyles']['radius']};
	color: {$date_styles['color']};
	background-color: {$date_styles['bg_color']};
	font-size: {$attributes['dateStyles']['fontSize']};
	font-family: {$attributes['dateStyles']['fontFamily']};
	font-weight: {$attributes['dateStyles']['fontWeight']};
}
#$block_id .cozy-block-featured-post-tabs__post-date a:hover {
	color: {$date_styles['color_hover']};
	background-color: {$date_styles['bg_color_hover']};
	border-color: {$date_styles['border_color_hover']};
}

#$block_id .tags-wrapper {
	gap: {$attributes['tagStyles']['gap']};
	font-size: {$attributes['tagStyles']['fontSize']};
	font-family: {$attributes['tagStyles']['fontFamily']};
	font-weight: {$attributes['tagStyles']['fontWeight']};
	{$tag_box_padding}
}
#$block_id .tags-wrapper a {
	{$tag_padding}
	{$tag_border}
	border-radius: {$attributes['tagStyles']['radius']};
	color: {$tag_styles['color']};
	background-color: {$tag_styles['bg_color']};
}
#$block_id .tags-wrapper a:hover {
	color: {$tag_styles['color_hover']};
	background-color: {$tag_styles['bg_color_hover']};
	border-color: {$tag_styles['border_color_hover']};
}
BLOCK_STYLES;

$output = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';

// <-- Tabs -->.
$output                 .= '<article class="cozy-block-featured-post-tabs__tabs">';
$cozy_featured_post_tabs = array(
	'latest'   => esc_html_x( 'Latest', 'cozy-addons' ),
	'popular'  => esc_html_x( 'Popular', 'cozy-addons' ),
	'trending' => esc_html_x( 'Trending', 'cozy-addons' ),
	'tags'     => esc_html_x( 'Tags', 'cozy-addons' ),
	'comments' => esc_html_x( 'Comments', 'cozy-addons' ),
);

$set_first_tab = false;
$first_tab     = '';

foreach ( $cozy_featured_post_tabs as $key => $label ) {
	if ( $attributes['enableOptions'][ $key ] ) {
		$active_class = ! $set_first_tab ? ' active-tab' : '';
		if ( ! $set_first_tab ) {
			$first_tab = $key;
		}
		$set_first_tab = true;
		$output       .= '<div class="cozy-block-featured-post-tabs__tab' . $active_class . '" id="' . esc_attr( $key ) . '">';
		if ( $attributes['icon']['enabled'] ) {
			$output .= '<div style="display:flex;flex-wrap:wrap;gap:' . $attributes['icon']['gap'] . ';align-items:center;">';
			if ( 'icon-only' === $attributes['icon']['position'] ) {
				$output .= '<div class="cozy-block-featured-post-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-post-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
			} elseif ( 'before' === $attributes['icon']['position'] ) {
				$output .= '<div class="cozy-block-featured-post-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-post-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
				$output .= '<path d="' . $attributes['icon'][ $key ]['path'] . '"></path>';
				$output .= '</svg>';
				$output .= '</div>';
				$output .= '<p>' . $label . '</p>';
			} else {
				$output .= '<p>' . $label . '</p>';
				$output .= '<div class="cozy-block-featured-post-tabs__icon-wrapper view-' . $attributes['icon']['view'] . ' layout-' . $attributes['icon']['layout'] . '">';
				$output .= '<svg class="cozy-block-featured-post-tabs__icon" xmlns="http://www.w3.org/2000/svg"	aria-hidden="true" viewBox="' . $attributes['icon'][ $key ]['viewBox']['vx'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vy'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vw'] . ' ' . $attributes['icon'][ $key ]['viewBox']['vh'] . '" stroke-width="' . $icon_styles['stroke_width'] . '" stroke-opacity="' . $icon_styles['stroke_opacity'] . '">';
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
// <-- Tabs /-->.


$output .= '<div class="spinner display-none"></div>';
if ( isset( $attributes['tabStyles']['fontFamily'] ) && ! empty( $attributes['tabStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['tabStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['categoryStyles']['fontFamily'] ) && ! empty( $attributes['categoryStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['categoryStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['titleStyles']['fontFamily'] ) && ! empty( $attributes['titleStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['titleStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['dateStyles']['fontFamily'] ) && ! empty( $attributes['dateStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['dateStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['tagStyles']['fontFamily'] ) && ! empty( $attributes['tagStyles']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['tagStyles']['fontFamily'] . ':wght@300;400;500;600;700;800;900" />';
}
// <-- Post Content -->.
$output .= '<div class="cozy-block-featured-post-tabs__content-wrapper">';

if ( ! function_exists( 'cozy_render_featured_post_tab_data' ) ) {
	function cozy_render_featured_post_tab_data( $post, $attributes ) {
		$output = '<div style="display:flex;gap:' . esc_attr( $attributes['imageStyles']['gap'] ) . ';">';

		if ( $attributes['postOptions']['postImage'] ) {
			$output .= '<figure class="cozy-block-featured-post-tabs__post-image' . ( $attributes['imageStyles']['hoverEffect'] ? ' has-hover-effect' : '' ) . '">';
			$output .= '<a href="' . esc_url( $post['post_link'] ) . '" target="_blank" rel="noopener"><img src="' . esc_url( $post['post_image_url'] ) . '" /></a>';
			$output .= '</figure>';
		}

		$output .= '<div>';

		if ( $attributes['postOptions']['categories'] ) {
			$output .= '<div class="cozy-block-featured-post-tabs__post-categories' . ( $attributes['categoryStyles']['hoverEffect'] ? ' has-hover-effect' : '' ) . '">';
			if ( ! empty( $post['post_categories'] ) ) {
				foreach ( $post['post_categories'] as $cat ) {
					$output .= '<a href="' . esc_url( $cat['link'] ) . '" target="_blank" rel="noopener">' . $cat['name'] . '</a>';
				}
			}
			$output .= '</div>';
		}

		$output .= '<h4 class="cozy-block-featured-post-tabs__post-title"><a href="' . esc_url( $post['post_link'] ) . '" target="_blank" rel="noopener">' . $post['post_title'] . '</a></h4>';

		if ( $attributes['postOptions']['postContent'] ) {
			$output .= '<p class="cozy-block-featured-post-tabs__post-content">' . cozy_create_excerpt( $post['post_content'], $attributes['postOptions']['excerpt'] ) . '</p>';
		}

		if ( $attributes['postOptions']['postDate'] ) {
			$output .= '<p class="cozy-block-featured-post-tabs__post-date"><a href="' . esc_url( $post['post_link'] ) . '" target="_blank" rel="noopener">' . $post['post_date_formatted'] . '</a></p>';
		}

		$output .= '</div></div>';

		return $output;
	}
}

if ( ! function_exists( 'cozy_fetch_featured_post_tab_data' ) ) {
	function cozy_fetch_featured_post_tab_data( $tab, $attributes ) {
		$data = array();

		switch ( $tab ) {
			case 'comments':
				global $wpdb;
				$per_page = intval( $attributes['perPage'][ $tab ] );
				// Get all approved comments.
				$all_comments = $wpdb->get_results(
					"
				SELECT comment_ID, comment_post_ID, comment_author, comment_author_email, comment_content, comment_date
				FROM $wpdb->comments
				WHERE comment_approved = '1' ORDER BY comment_date DESC
			"
				);

				$comments_formatted = array();

				// Get the total comment count for each comment's post.
				foreach ( $all_comments as $comment ) {
					$comment->comment_author_avatar = get_avatar_url( $comment->comment_author_email );
					$comment->link                  = get_comment_link( $comment->comment_ID );
					$comment->formatted_date        = date( 'F j, Y', strtotime( $comment->comment_date ) );

					$comments_formatted[] = $comment;
				}

				// Get the top comments.
				$data = array_slice( $comments_formatted, 0, $per_page );

				wp_reset_postdata();
				break;

			case 'tags':
				$per_page     = intval( $attributes['perPage'][ $tab ] );
				$popular_tags = get_terms(
					array(
						'taxonomy'   => 'post_tag',
						'orderby'    => 'count',
						'order'      => 'DESC',
						'number'     => $per_page,
						'hide_empty' => true,
					)
				);

				$tags_with_links = array();
				foreach ( $popular_tags as $tag ) {
					$tag->link         = get_term_link( $tag );
					$tags_with_links[] = $tag;
				}

				wp_reset_postdata();
				$data = $tags_with_links;
				break;

			default:
				$per_page = intval( $attributes['perPage'][ $tab ] );
				$args     = array();

				switch ( $tab ) {
					case 'popular':
						$args = array(
							'post_type'      => 'post',
							'meta_key'       => 'cozy_post_views_count', // Replace with your popularity field.
							'orderby'        => 'cozy_post_views_count',
							'order'          => 'DESC',
							'posts_per_page' => $per_page, // Number of popular posts to retrieve.
							'meta_query'     => array(
								'relation' => 'AND',
								array(
									'key'     => 'cozy_post_views_count',
									'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
								),
								array(
									'key'     => 'cozy_post_views_count',
									'value'   => '0',
									'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
								),
							),
						);
						break;

					case 'trending':
						$args = array(
							'post_type'      => 'post',
							'meta_key'       => 'cozy_trending_post_views', // Replace with your popularity field.
							'orderby'        => 'cozy_trending_post_views',
							'order'          => 'DESC',
							'posts_per_page' => $per_page, // Number of popular posts to retrieve.
							'meta_query'     => array(
								'relation' => 'AND',
								array(
									'key'     => 'cozy_trending_post_views',
									'compare' => 'EXISTS', // Check if the timestamp is greater than or equal to one week ago.
								),
								array(
									'key'     => 'cozy_trending_post_views',
									'value'   => '0',
									'compare' => '>', // Check if the timestamp is greater than or equal to one week ago.
								),
							),
						);
						break;

					default:
						$args = array(
							'post_type'      => 'post',
							'orderby'        => 'date',
							'order'          => 'DESC',
							'posts_per_page' => $per_page, // Number of popular posts to retrieve.
						);

				}

				$latest_posts = new \WP_Query( $args );

				$additional_post_data = array();

				foreach ( $latest_posts->posts as $post ) {
					$post_image_url              = get_the_post_thumbnail_url( $post->ID );
					$post_link                   = get_permalink( $post->ID );
					$post_id                     = $post->ID;
					$post_data                   = (array) $post; // Convert WP_Post object to an array.
					$post_data['post_image_url'] = $post_image_url;

					// Get categories and their links.
					$categories      = get_the_category( $post->ID );
					$post_categories = array();
					foreach ( $categories as $category ) {
						$post_categories[] = array(
							'name'        => $category->name,
							'link'        => get_category_link( $category->term_id ),
							'count'       => $category->count,
							'description' => $category->description,
							'slug'        => $category->slug,
							'taxonomy'    => $category->taxonomy,
							'parent'      => $category->parent,
						);
					}
					$post_data['post_categories'] = $post_categories;

					$post_data['post_link']           = $post_link;
					$post_data['post_date_formatted'] = get_the_date( '', $post_id );
					$additional_post_data[]           = $post_data;
				}

				wp_reset_postdata();

				$data = $additional_post_data;
				break;
		}

		if ( empty( $data ) ) {
			return '';
		}

		$render_html = '';

		switch ( $tab ) {
			case 'tags':
				foreach ( $data as $tag ) {
					$render_html .= '<div class="cozy-block-featured-post-tabs__tag"><a href="' . esc_url( $tag['link'] ) . '" target="_blank" rel="noopener">' . $tag['name'] . '</a></div>';
				}
				break;

			case 'comments':
				foreach ( $data as $comment ) {
					$render_html .= '<div class="cozy-block-featured-post-tabs__comment">
                      <p class="cozy-block-featured-post-tabs__comment-content">' . cozy_create_excerpt( $comment['comment_content'], 100 ) . '</p>
                      <a href="' . esc_url( $comment['link'] ) . '" target="_blank" rel="noopener">
                        <div style="display:flex;gap:10px;margin-top:10px;">
                            <img class="cozy-block-featured-post-tabs__author-avatar" src="' . esc_url( $comment['comment_author_avatar'] ) . '" width="50" height="50" style="border-radius:100px;"/>
                            <div>
                              <p class="cozy-block-featured-post-tabs__comment-author">' . $comment['comment_author'] . '</p>
                              <p class="cozy-block-featured-post-tabs__comment-date">' . $comment['formatted_date'] . '</p>
                            </div>
                      </div>
                      </a>
                      </div>';
				}
				break;

			default:
				foreach ( $data as $post ) {
					$render_html .= '<div class="cozy-block-featured-post-tabs__content">' . cozy_render_featured_post_tab_data( $post, $attributes ) . '</div>';
				}
				break;
		}

		return '<div class="' . esc_attr( $tab ) . '-wrapper">' . $render_html . '</div>';
	}
}

if ( ! function_exists( 'cozy_render_first_featured_post_tab_content' ) ) {
	function cozy_render_first_featured_post_tab_content( $first_tab, $attributes ) {
		return cozy_fetch_featured_post_tab_data( $first_tab, $attributes );
	}
}

// Example usage
$response = cozy_render_first_featured_post_tab_content( $first_tab, $attributes );


if ( $response ) {
	// Handle the response
	$output .= $response;
}

$output .= '</div>';
// <-- Post Content /-->.

$output .= '</div>';

$render = sprintf( '<div class="cozy-block-wrapper"><div %1$s><style>%2$s</style> %3$s</div></div>', $wrapper_attributes, $block_styles, $output );
echo $render;
