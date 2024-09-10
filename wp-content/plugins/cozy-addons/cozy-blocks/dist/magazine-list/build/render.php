<?php
$client_id = ! empty( $attributes['clientId'] ) ? $attributes['clientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$attributes['ajaxUrl'] = admin_url( 'admin-ajax.php' );
$attributes['nonce']   = wp_create_nonce( 'cozy_block_magazine_list_load_more' );
wp_localize_script( 'cozy-block-scripts', $block_id, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockMagazineList( "' . $client_id . '" ) }) ' );

$header_box = array(
	'padding' => cozy_render_TRBL( 'padding', $attributes['headerBox']['padding'] ),
	'border'  => isset( $attributes['headerBox']['border'] ) ? cozy_render_TRBL( 'border', $attributes['headerBox']['border'] ) : '',
	'bg'      => isset( $attributes['headerBox']['color']['bg'] ) ? $attributes['headerBox']['color']['bg'] : '',
);

$heading = array(
	'padding'   => cozy_render_TRBL( 'padding', $attributes['headingStyles']['padding'] ),
	'border'    => isset( $attributes['headingStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['headingStyles']['border'] ) : '',
	'radius'    => cozy_render_TRBL( 'border-radius', $attributes['headingStyles']['radius'] ),
	'bg'        => isset( $attributes['headingStyles']['color']['bg'] ) ? $attributes['headingStyles']['color']['bg'] : '',
	'text'      => isset( $attributes['headingStyles']['color']['text'] ) ? $attributes['headingStyles']['color']['text'] : '',
	'clip_path' => isset( $attributes['headingStyles']['clipPath'] ) ? $attributes['headingStyles']['clipPath'] : '',
);

$sub_heading = array(
	'padding'      => cozy_render_TRBL( 'padding', $attributes['subHeading']['padding'] ),
	'border'       => isset( $attributes['subHeading']['border'] ) ? cozy_render_TRBL( 'border', $attributes['subHeading']['border'] ) : '',
	'text'         => isset( $attributes['subHeading']['color']['text'] ) ? $attributes['subHeading']['color']['text'] : '',
	'text_hover'   => isset( $attributes['subHeading']['color']['textHover'] ) ? $attributes['subHeading']['color']['textHover'] : '',
	'bg'           => isset( $attributes['subHeading']['color']['bg'] ) ? $attributes['subHeading']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['subHeading']['color']['bgHover'] ) ? $attributes['subHeading']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['subHeading']['color']['borderHover'] ) ? $attributes['subHeading']['color']['borderHover'] : '',
);

$post_item    = array(
	'padding'      => cozy_render_TRBL( 'padding', $attributes['postBoxStyles']['padding'] ),
	'border'       => isset( $attributes['postBoxStyles']['border'] ) ? cozy_render_TRBL( 'border', $attributes['postBoxStyles']['border'] ) : '',
	'bg'           => isset( $attributes['postBoxStyles']['color']['bg'] ) ? $attributes['postBoxStyles']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['postBoxStyles']['color']['bgHover'] ) ? $attributes['postBoxStyles']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['postBoxStyles']['color']['borderHover'] ) ? $attributes['postBoxStyles']['color']['borderHover'] : '',
	'shadow'       => array(
		'horizontal' => isset( $attributes['postBoxStyles']['shadow']['horizontal'] ) ? $attributes['postBoxStyles']['shadow']['horizontal'] : '',
		'vertical'   => isset( $attributes['postBoxStyles']['shadow']['vertical'] ) ? $attributes['postBoxStyles']['shadow']['vertical'] : '',
		'blur'       => isset( $attributes['postBoxStyles']['shadow']['blur'] ) ? $attributes['postBoxStyles']['shadow']['blur'] : '',
		'spread'     => isset( $attributes['postBoxStyles']['shadow']['spread'] ) ? $attributes['postBoxStyles']['shadow']['spread'] : '',
		'color'      => isset( $attributes['postBoxStyles']['shadow']['color'] ) ? $attributes['postBoxStyles']['shadow']['color'] : '',
		'position'   => isset( $attributes['postBoxStyles']['shadow']['position'] ) ? $attributes['postBoxStyles']['shadow']['position'] : '',
	),
	'shadow_hover' => array(
		'horizontal' => isset( $attributes['postBoxStyles']['shadowHover']['horizontal'] ) ? $attributes['postBoxStyles']['shadowHover']['horizontal'] : '',
		'vertical'   => isset( $attributes['postBoxStyles']['shadowHover']['vertical'] ) ? $attributes['postBoxStyles']['shadowHover']['vertical'] : '',
		'blur'       => isset( $attributes['postBoxStyles']['shadowHover']['blur'] ) ? $attributes['postBoxStyles']['shadowHover']['blur'] : '',
		'spread'     => isset( $attributes['postBoxStyles']['shadowHover']['spread'] ) ? $attributes['postBoxStyles']['shadowHover']['spread'] : '',
		'color'      => isset( $attributes['postBoxStyles']['shadowHover']['color'] ) ? $attributes['postBoxStyles']['shadowHover']['color'] : '',
		'position'   => isset( $attributes['postBoxStyles']['shadowHover']['position'] ) ? $attributes['postBoxStyles']['shadowHover']['position'] : '',
	),
);
$post_image   = array(
	'width'  => isset( $attributes['postOptions']['image']['width'] ) ? $attributes['postOptions']['image']['width'] : '',
	'height' => isset( $attributes['postOptions']['image']['height'] ) ? $attributes['postOptions']['image']['height'] : '',
);
$post_content = array(
	'padding'           => cozy_render_TRBL( 'padding', $attributes['postOptions']['content']['padding'] ),
	'title_font_family' => isset( $attributes['postOptions']['title']['font']['family'] ) ? $attributes['postOptions']['title']['font']['family'] : '',
	'title_color'       => isset( $attributes['postOptions']['title']['color']['text'] ) ? $attributes['postOptions']['title']['color']['text'] : '',
	'title_color_hover' => isset( $attributes['postOptions']['title']['color']['textHover'] ) ? $attributes['postOptions']['title']['color']['textHover'] : '',
);

$cat_item = array(
	'padding'      => cozy_render_TRBL( 'padding', $attributes['postCategories']['padding'] ),
	'border'       => isset( $attributes['postCategories']['border'] ) ? cozy_render_TRBL( 'border', $attributes['postCategories']['border'] ) : '',
	'font_family'  => isset( $attributes['postCategories']['font']['family'] ) ? $attributes['postCategories']['font']['family'] : '',
	'text'         => isset( $attributes['postCategories']['color']['text'] ) ? $attributes['postCategories']['color']['text'] : '',
	'text_hover'   => isset( $attributes['postCategories']['color']['textHover'] ) ? $attributes['postCategories']['color']['textHover'] : '',
	'bg'           => isset( $attributes['postCategories']['color']['bg'] ) ? $attributes['postCategories']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['postCategories']['color']['bgHover'] ) ? $attributes['postCategories']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['postCategories']['color']['borderHover'] ) ? $attributes['postCategories']['color']['borderHover'] : '',
);

$post_meta = array(
	'font_family' => isset( $attributes['postMeta']['font']['family'] ) ? $attributes['postMeta']['font']['family'] : '',
	'text'        => isset( $attributes['postMeta']['color']['text'] ) ? $attributes['postMeta']['color']['text'] : '',
	'text_hover'  => isset( $attributes['postMeta']['color']['textHover'] ) ? $attributes['postMeta']['color']['textHover'] : '',
);

$read_more = array(
	'padding'      => cozy_render_TRBL( 'padding', $attributes['readMore']['padding'] ),
	'border'       => isset( $attributes['readMore']['border'] ) ? cozy_render_TRBL( 'border', $attributes['readMore']['border'] ) : '',
	'font_family'  => isset( $attributes['readMore']['font']['family'] ) ? $attributes['readMore']['font']['family'] : '',
	'text'         => isset( $attributes['readMore']['color']['text'] ) ? $attributes['readMore']['color']['text'] : '',
	'text_hover'   => isset( $attributes['readMore']['color']['textHover'] ) ? $attributes['readMore']['color']['textHover'] : '',
	'bg'           => isset( $attributes['readMore']['color']['bg'] ) ? $attributes['readMore']['color']['bg'] : '',
	'bg_hover'     => isset( $attributes['readMore']['color']['bgHover'] ) ? $attributes['readMore']['color']['bgHover'] : '',
	'border_hover' => isset( $attributes['readMore']['color']['borderHover'] ) ? $attributes['readMore']['color']['borderHover'] : '',
);

$ajax_loader = array(
	'padding'           => cozy_render_TRBL( 'padding', $attributes['ajaxLoader']['padding'] ),
	'border'            => isset( $attributes['ajaxLoader']['border'] ) ? cozy_render_TRBL( 'border', $attributes['ajaxLoader']['border'] ) : '',
	'font_family'       => isset( $attributes['ajaxLoader']['font']['family'] ) ? $attributes['ajaxLoader']['font']['family'] : '',
	'text'              => isset( $attributes['ajaxLoader']['color']['text'] ) ? $attributes['ajaxLoader']['color']['text'] : '',
	'text_hover'        => isset( $attributes['ajaxLoader']['color']['textHover'] ) ? $attributes['ajaxLoader']['color']['textHover'] : '',
	'bg'                => isset( $attributes['ajaxLoader']['color']['bg'] ) ? $attributes['ajaxLoader']['color']['bg'] : '',
	'bg_hover'          => isset( $attributes['ajaxLoader']['color']['bgHover'] ) ? $attributes['ajaxLoader']['color']['bgHover'] : '',
	'border_hover'      => isset( $attributes['ajaxLoader']['color']['borderHover'] ) ? $attributes['ajaxLoader']['color']['borderHover'] : '',
	'spinner_primary'   => isset( $attributes['ajaxLoader']['color']['spinnerPrimary'] ) ? $attributes['ajaxLoader']['color']['spinnerPrimary'] : '',
	'spinner_secondary' => isset( $attributes['ajaxLoader']['color']['spinnerSecondary'] ) ? $attributes['ajaxLoader']['color']['spinnerSecondary'] : '',
);

$column1 = $attributes['postOptions']['column'] <= 3 ? $attributes['postOptions']['column'] : 3;
$column2 = $attributes['postOptions']['column'] <= 2 ? $attributes['postOptions']['column'] : 2;

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-magazine-list__header {
    {$header_box['padding']}
    margin-top: {$attributes['headerBox']['margin']['top']};
    margin-bottom: {$attributes['headerBox']['margin']['bottom']};
    {$header_box['border']}
    border-radius: {$attributes['headerBox']['radius']};
    background-color: {$header_box['bg']};
    gap: {$attributes['headingGap']};
	justify-content: {$attributes['headerBox']['tabAlign']};
}

#$block_id .cozy-block-magazine-list__heading {
    {$heading['padding']}
    {$heading['border']}
    {$heading['radius']}
    font-size: {$attributes['headingStyles']['font']['size']};
    font-weight: {$attributes['headingStyles']['font']['weight']};
    font-family: {$attributes['headingStyles']['font']['family']};
    background-color: {$heading['bg']};
    color: {$heading['text']};
	clip-path: {$heading['clip_path']};
}

#$block_id .cozy-block-magazine-list__sub-heading {
    {$sub_heading['padding']}
    {$sub_heading['border']}
	border-radius: {$attributes['subHeading']['radius']};
    font-size: {$attributes['subHeading']['font']['size']};
    font-weight: {$attributes['subHeading']['font']['weight']};
    font-family: {$attributes['subHeading']['font']['family']};
	text-transform: {$attributes['subHeading']['letterCase']};
    background-color: {$sub_heading['bg']};
}
#$block_id .cozy-block-magazine-list__sub-heading, #$block_id .cozy-block-magazine-list__sub-heading a {
	color: {$sub_heading['text']};
}
#$block_id .cozy-block-magazine-list__sub-heading:hover { 
	background-color: {$sub_heading['bg_hover']};
	border-color: {$sub_heading['border_hover']};
}
#$block_id .cozy-block-magazine-list__sub-heading:hover, #$block_id .cozy-block-magazine-list__sub-heading:hover a {
	color: {$sub_heading['text_hover']};
}

#$block_id .cozy-block-magazine-list__posts {
	text-align: {$attributes['postOptions']['textAlign']};
}
#$block_id .cozy-block-magazine-list__posts:not(.has-masonry) {
	grid-template-columns: repeat({$attributes['postOptions']['column']}, 1fr);
	gap: {$attributes['postOptions']['gap']};
}
#$block_id .cozy-block-magazine-list__posts.has-masonry .cozy-block-magazine-list__post-item {
	margin-bottom: {$attributes['postOptions']['gap']};
}
@media only screen and (max-width: 1024px) {
	#$block_id .cozy-block-magazine-list__posts {
		grid-template-columns: repeat({$column1}, 1fr) !important;
	}
}
@media only screen and (max-width: 767px) {
	#$block_id .cozy-block-magazine-list__posts {
		grid-template-columns: repeat({$column2}, 1fr) !important;
	}
}
@media only screen and (max-width: 420px) {
	#$block_id .cozy-block-magazine-list__posts {
		grid-template-columns: repeat(1, 1fr) !important;
	}
}

#$block_id .cozy-block-magazine-list__post-item {
	{$post_item['padding']}
	margin-top: {$attributes['postBoxStyles']['margin']['top']};
	margin-bottom: {$attributes['postBoxStyles']['margin']['bottom']};
	{$post_item['border']}
	border-radius: {$attributes['postBoxStyles']['radius']};
	background-color: {$post_item['bg']};
	gap: {$attributes['postOptions']['content']['gap']};
}
#$block_id .cozy-block-magazine-list__post-item.has-box-shadow {
	box-shadow: {$post_item['shadow']['horizontal']}px {$post_item['shadow']['vertical']}px {$post_item['shadow']['blur']}px {$post_item['shadow']['spread']}px {$post_item['shadow']['color']} {$post_item['shadow']['position']}; 
}
#$block_id .cozy-block-magazine-list__post-item:hover {
	background-color: {$post_item['bg_hover']};
	border-color: {$post_item['border_hover']};
}
#$block_id .cozy-block-magazine-list__post-item.has-hover-box-shadow:hover {
	box-shadow: {$post_item['shadow_hover']['horizontal']}px {$post_item['shadow_hover']['vertical']}px {$post_item['shadow_hover']['blur']}px {$post_item['shadow_hover']['spread']}px {$post_item['shadow_hover']['color']} {$post_item['shadow_hover']['position']}; 
}

#$block_id .post__image {
	min-width: {$post_image['width']};
	max-height: {$post_image['height']};
}
#$block_id .post__image  img {
	height: {$post_image['height']};
	border-radius: {$attributes['postOptions']['image']['radius']};
}

#$block_id .post__content-wrapper {
	{$post_content['padding']}
}

#$block_id .post__categories {
	gap: {$attributes['postCategories']['gap']};
	margin-top: {$attributes['postCategories']['margin']['top']};
	margin-bottom: {$attributes['postCategories']['margin']['bottom']};
	justify-content: {$attributes['postOptions']['textAlign']};
}
#$block_id .post__category-item {
	{$cat_item['padding']}
	{$cat_item['border']}
	border-radius: {$attributes['postCategories']['radius']};
	font-size: {$attributes['postCategories']['font']['size']};
	font-weight: {$attributes['postCategories']['font']['weight']};
	font-family: {$cat_item['font_family']};
	text-transform: {$attributes['postCategories']['letterCase']};
	color: {$cat_item['text']};
	background-color: {$cat_item['bg']};
}
#$block_id .post__category-item:hover {
	color: {$cat_item['text_hover']};
	background-color: {$cat_item['bg_hover']};
	border-color: {$cat_item['border_hover']};
}

#$block_id .post__title {
	margin-top: {$attributes['postOptions']['title']['margin']['top']};
	margin-bottom: {$attributes['postOptions']['title']['margin']['bottom']};
	font-size: {$attributes['postOptions']['title']['font']['size']};
	font-weight: {$attributes['postOptions']['title']['font']['weight']};
	font-family: {$post_content['title_font_family']};
	text-transform: {$attributes['postOptions']['title']['letterCase']};
}
#$block_id .post__title a {
	color: {$post_content['title_color']};
}
#$block_id .post__title:hover a {
	color: {$post_content['title_color_hover']};
}

#$block_id .post__meta {
	margin-top: {$attributes['postMeta']['margin']['top']};
	margin-bottom: {$attributes['postMeta']['margin']['bottom']};
	justify-content: {$attributes['postOptions']['textAlign']};
	font-size: {$attributes['postMeta']['font']['size']};
	font-weight: {$attributes['postMeta']['font']['weight']};
	font-family: {$post_meta['font_family']};
	text-transform: {$attributes['postMeta']['letterCase']};
}
#$block_id .post__meta .display-flex {
	color: {$post_meta['text']};
}
#$block_id .post__meta svg {
	fill: {$post_meta['text']};
}
#$block_id .post__meta .display-flex:hover p {
	color: {$post_meta['text_hover']};
}
#$block_id .post__meta .display-flex:hover svg {
	fill: {$post_meta['text_hover']};
}

#$block_id .post__read-more {
	margin-top: {$attributes['readMore']['margin']['top']};
	margin-bottom: {$attributes['readMore']['margin']['bottom']};
	text-align: {$attributes['readMore']['textAlign']};
}
#$block_id .post__read-more-link {
	{$read_more['padding']}
	{$read_more['border']}
	border-radius: {$attributes['readMore']['radius']};
	font-size: {$attributes['readMore']['font']['size']};
	font-weight: {$attributes['readMore']['font']['weight']};
	font-family: {$read_more['font_family']};
	text-transform: {$attributes['readMore']['letterCase']};
	color: {$read_more['text']};
	background-color: {$read_more['bg']};
}
#$block_id .post__read-more-link:hover {
	color: {$read_more['text_hover']};
	background-color: {$read_more['bg_hover']};
	border-color: {$read_more['border_hover']};
}

#$block_id .cozy-block-magazine-list__ajax-loader-wrapper {
	margin-top: {$attributes['ajaxLoader']['margin']['top']};
	margin-bottom: {$attributes['ajaxLoader']['margin']['bottom']};
	text-align: {$attributes['ajaxLoader']['textAlign']};
}
#$block_id .cozy-block-magazine-list__ajax-loader, #$block_id .scroll-spinner.has-loading-text {
	{$ajax_loader['padding']}
	{$ajax_loader['border']}
	border-radius: {$attributes['ajaxLoader']['radius']};
	font-size: {$attributes['ajaxLoader']['font']['size']};
	font-weight: {$attributes['ajaxLoader']['font']['weight']};
	font-family: {$ajax_loader['font_family']};
	text-transform: {$attributes['ajaxLoader']['letterCase']};
	color: {$ajax_loader['text']};
	background-color: {$ajax_loader['bg']};
	min-width: {$attributes['ajaxLoader']['minWidth']};
}
#$block_id .cozy-block-magazine-list__ajax-loader:hover {
	color: {$ajax_loader['text_hover']};
	background-color: {$ajax_loader['bg_hover']};
	border-color: {$ajax_loader['border_hover']};
}
#$block_id .cozy-block-magazine-list__ajax-loader .spinner,
#$block_id .scroll-spinner {
	border-color: {$ajax_loader['spinner_secondary']};
	border-top-color: {$ajax_loader['spinner_primary']};
}
BLOCK_STYLES;

$classes   = array();
$classes[] = 'cozy-block-magazine-list';
$classes[] = $attributes['ajaxLoader']['enabled'] && 'scroll' === $attributes['ajaxLoader']['type'] ? 'has-infinite-scroll' : '';

$output = '<div class="' . implode( ' ', $classes ) . '" id="' . $block_id . '">';
if ( isset( $attributes['headingStyles']['font']['family'] ) && ! empty( $attributes['headingStyles']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['headingStyles']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['subHeading']['font']['family'] ) && ! empty( $attributes['subHeading']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['subHeading']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['postCategories']['font']['family'] ) && ! empty( $attributes['postCategories']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['postCategories']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['postOptions']['title']['font']['family'] ) && ! empty( $attributes['postOptions']['title']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['postOptions']['title']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['postMeta']['font']['family'] ) && ! empty( $attributes['postMeta']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['postMeta']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['readMore']['font']['family'] ) && ! empty( $attributes['readMore']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['readMore']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
if ( isset( $attributes['ajaxLoader']['font']['family'] ) && ! empty( $attributes['ajaxLoader']['font']['family'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['ajaxLoader']['font']['family'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}

if ( $attributes['enableOptions']['heading'] || $attributes['enableOptions']['subHeading'] ) {
	$output .= '<article class="cozy-block-magazine-list__header">';
	if ( $attributes['enableOptions']['heading'] ) {
		$output .= sprintf( '<%1$s class="cozy-block-magazine-list__heading">%2$s</%1$s>', $attributes['headingTag'], $attributes['headingLabel'] );
	}
	if ( $attributes['enableOptions']['subHeading'] ) {
		$output .= sprintf( '<%1$s class="cozy-block-magazine-list__sub-heading">%2$s</%1$s>', $attributes['subHeading']['tag'], $attributes['subHeading']['label'] );
	}
	$output .= '</article>';
}

/* Fetch Posts */
if ( ! function_exists( 'get_cozy_block_magazine_list_posts' ) ) {
	function get_cozy_block_magazine_list_posts( $cozy_block_magazine_list_args = array() ) {
		if ( ! empty( $cozy_block_magazine_list_args ) ) {
			$latest_posts         = new \WP_Query( $cozy_block_magazine_list_args );
			$additional_post_data = array();
			foreach ( $latest_posts->posts as $post ) {
				$post_id        = $post->ID;
				$post_image_url = get_the_post_thumbnail_url( $post_id );
				$post_link      = get_permalink( $post_id );

				$post_data                   = (array) $post; // Convert WP_Post object to an array.
				$post_data['post_image_url'] = $post_image_url;

				// Get categories and their links.
				$categories      = get_the_category( $post_id );
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

				$post_data['post_author_name']    = get_the_author_meta( 'display_name', $post->post_author ) ?? '';
				$post_data['post_author_url']     = get_author_posts_url( $post->post_author ) ?? '';
				$post_data['post_link']           = $post_link;
				$post_data['post_date_formatted'] = get_the_date( '', $post_id );
				$post_data['comment_link']        = get_comments_link( $post_id );
				$additional_post_data[]           = $post_data;
			}

			wp_reset_postdata();

			return $additional_post_data;
		}

		return array();
	}
}

/* Posts Render */
if ( ! function_exists( 'render_cozy_block_magazine_list_posts_data' ) ) {
	function render_cozy_block_magazine_list_posts_data( $attributes, $post_data, &$output ) {
		$classes   = array();
		$classes[] = 'cozy-block-magazine-list__post-item';
		$classes[] = $attributes['postBoxStyles']['hoverEffect'] ? 'has-hover-effect' : '';
		$classes[] = $attributes['postBoxStyles']['shadow']['enabled'] ? 'has-box-shadow' : '';
		$classes[] = $attributes['postBoxStyles']['shadowHover']['enabled'] ? 'has-hover-box-shadow' : '';
		$output   .= '<li class="' . implode( ' ', $classes ) . '">';

		if ( $attributes['enableOptions']['postImage'] && 'left' === $attributes['postOptions']['image']['position'] ) {
			$classes   = array();
			$classes[] = 'post__image';
			$classes[] = $attributes['postOptions']['image']['hoverEffect'] ? 'has-hover-effect' : '';
			$output   .= '<figure class="' . implode( ' ', $classes ) . '"><a href="' . esc_url( $post_data['post_link'] ) . '" target="_blank" rel="noopener"><img src="' . $post_data['post_image_url'] . '" /></a></figure>';
		}

		$output .= '<div class="post__content-wrapper">';

		if ( $attributes['enableOptions']['postCategories'] && ! empty( $post_data['post_categories'] ) ) {
			$output   .= '<div class="post__categories">';
			$classes   = array();
			$classes[] = 'post__category-item';
			$classes[] = $attributes['postCategories']['hoverEffect'] ? 'has-hover-effect' : '';
			foreach ( $post_data['post_categories'] as $cat_data ) {
				$output .= '<a class="' . implode( ' ', $classes ) . '" href="' . esc_url( $cat_data['link'] ) . '" target="_blank" rel="noopener">' . esc_html_x( $cat_data['name'], 'cozy-addons' ) . '</a>';
			}
			$output .= '</div>';
		}

		$output .= '<h2 class="post__title"><a href="' . esc_url( $post_data['post_link'] ) . '" target="_blank" rel="noopener">' . esc_html_x( $post_data['post_title'], 'cozy-addons' ) . '</a></h2>';

		if ( $attributes['enableOptions']['postAuthor'] || $attributes['enableOptions']['postComments'] || $attributes['enableOptions']['postDate'] ) {
			$output .= '<div class="post__meta">';

			if ( $attributes['enableOptions']['postAuthor'] ) {
				$output .= '<a class="post__author display-flex" href="' . esc_url( $post_data['post_author_url'] ) . '" target="_blank" rel="noopener">';
				$output .= '<svg
										width="' . $attributes['postMeta']['font']['size'] . '"
										height="' . $attributes['postMeta']['font']['size'] . '"
										xmlns="http://www.w3.org/2000/svg"
										aria-hidden="true"
										viewBox="0 0 12 15"
									>
										<path d="M11.2972 14.6667H0.630493V13.3333C0.630493 12.4493 0.981683 11.6014 1.6068 10.9763C2.23193 10.3512 3.07977 10 3.96383 10H7.96383C8.84788 10 9.69573 10.3512 10.3208 10.9763C10.946 11.6014 11.2972 12.4493 11.2972 13.3333V14.6667ZM5.96383 8.66667C5.43854 8.66667 4.9184 8.5632 4.43309 8.36218C3.94779 8.16117 3.50683 7.86653 3.1354 7.49509C2.76396 7.12366 2.46933 6.6827 2.26831 6.1974C2.06729 5.7121 1.96383 5.19195 1.96383 4.66667C1.96383 4.14138 2.06729 3.62124 2.26831 3.13593C2.46933 2.65063 2.76396 2.20967 3.1354 1.83824C3.50683 1.4668 3.94779 1.17217 4.43309 0.971148C4.9184 0.770129 5.43854 0.666666 5.96383 0.666666C7.02469 0.666666 8.04211 1.08809 8.79225 1.83824C9.5424 2.58838 9.96383 3.6058 9.96383 4.66667C9.96383 5.72753 9.5424 6.74495 8.79225 7.49509C8.04211 8.24524 7.02469 8.66667 5.96383 8.66667Z" />
									</svg>';

				$output .= '<p>' . esc_html_x( $post_data['post_author_name'], 'cozy-addons' ) . '</p>';
				$output .= '</a>';
			}

			if ( $attributes['enableOptions']['postComments'] && intval( $post_data['comment_count'] ) > 0 ) {
				$output .= '<a class="post__comments display-flex" href="' . esc_url( $post_data['comment_link'] ) . '" target="_blank" rel="noopener">';
				$output .= '<svg
										width="' . $attributes['postMeta']['font']['size'] . '"
										height="' . $attributes['postMeta']['font']['size'] . '"
										xmlns="http://www.w3.org/2000/svg"
										aria-hidden="true"
										viewBox="0 0 25 20"
									>
										<path d="M18.0556 6.94444C18.0556 3.10764 14.0148 0 9.02778 0C4.0408 0 0 3.10764 0 6.94444C0 8.43316 0.611979 9.80469 1.64931 10.9375C1.06771 12.2483 0.108507 13.2899 0.0954861 13.3029C0 13.4028 -0.0260417 13.5503 0.0303819 13.6806C0.0868056 13.8108 0.208333 13.8889 0.347222 13.8889C1.93576 13.8889 3.25087 13.355 4.19705 12.8038C5.59462 13.4852 7.24826 13.8889 9.02778 13.8889C14.0148 13.8889 18.0556 10.7812 18.0556 6.94444ZM23.3507 16.4931C24.388 15.3646 25 13.9887 25 12.5C25 9.59635 22.678 7.10937 19.388 6.07205C19.4271 6.35851 19.4444 6.6493 19.4444 6.94444C19.4444 11.5408 14.77 15.2778 9.02778 15.2778C8.55903 15.2778 8.1033 15.2431 7.65191 15.1953C9.0191 17.691 12.2309 19.4444 15.9722 19.4444C17.7517 19.4444 19.4054 19.0451 20.8029 18.3594C21.7491 18.9106 23.0642 19.4444 24.6528 19.4444C24.7917 19.4444 24.9175 19.362 24.9696 19.2361C25.026 19.1102 25 18.9627 24.9045 18.8585C24.8915 18.8455 23.9323 17.8082 23.3507 16.4931Z" />
									</svg>';

				$output .= '<p>' . esc_html_x( $post_data['comment_count'], 'cozy-addons' ) . '</p>';
				$output .= '</a>';
			}

			if ( $attributes['enableOptions']['postDate'] ) {
				$output .= '<a class="post__date display-flex" href="' . esc_url( $post_data['post_link'] ) . '" target="_blank" rel="noopener">';
				$output .= '<svg
										width="' . $attributes['postMeta']['font']['size'] . '"
										height="' . $attributes['postMeta']['font']['size'] . '"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 16 18"
										aria-hidden="true"
									>
										<path d="M7.66699 10.6666C7.43088 10.6666 7.23296 10.5868 7.07324 10.427C6.91352 10.2673 6.83366 10.0694 6.83366 9.83329C6.83366 9.59718 6.91352 9.39927 7.07324 9.23954C7.23296 9.07982 7.43088 8.99996 7.66699 8.99996C7.9031 8.99996 8.10102 9.07982 8.26074 9.23954C8.42046 9.39927 8.50033 9.59718 8.50033 9.83329C8.50033 10.0694 8.42046 10.2673 8.26074 10.427C8.10102 10.5868 7.9031 10.6666 7.66699 10.6666ZM4.33366 10.6666C4.09755 10.6666 3.89963 10.5868 3.73991 10.427C3.58019 10.2673 3.50033 10.0694 3.50033 9.83329C3.50033 9.59718 3.58019 9.39927 3.73991 9.23954C3.89963 9.07982 4.09755 8.99996 4.33366 8.99996C4.56977 8.99996 4.76769 9.07982 4.92741 9.23954C5.08713 9.39927 5.16699 9.59718 5.16699 9.83329C5.16699 10.0694 5.08713 10.2673 4.92741 10.427C4.76769 10.5868 4.56977 10.6666 4.33366 10.6666ZM11.0003 10.6666C10.7642 10.6666 10.5663 10.5868 10.4066 10.427C10.2469 10.2673 10.167 10.0694 10.167 9.83329C10.167 9.59718 10.2469 9.39927 10.4066 9.23954C10.5663 9.07982 10.7642 8.99996 11.0003 8.99996C11.2364 8.99996 11.4344 9.07982 11.5941 9.23954C11.7538 9.39927 11.8337 9.59718 11.8337 9.83329C11.8337 10.0694 11.7538 10.2673 11.5941 10.427C11.4344 10.5868 11.2364 10.6666 11.0003 10.6666ZM7.66699 14C7.43088 14 7.23296 13.9201 7.07324 13.7604C6.91352 13.6007 6.83366 13.4027 6.83366 13.1666C6.83366 12.9305 6.91352 12.7326 7.07324 12.5729C7.23296 12.4132 7.43088 12.3333 7.66699 12.3333C7.9031 12.3333 8.10102 12.4132 8.26074 12.5729C8.42046 12.7326 8.50033 12.9305 8.50033 13.1666C8.50033 13.4027 8.42046 13.6007 8.26074 13.7604C8.10102 13.9201 7.9031 14 7.66699 14ZM4.33366 14C4.09755 14 3.89963 13.9201 3.73991 13.7604C3.58019 13.6007 3.50033 13.4027 3.50033 13.1666C3.50033 12.9305 3.58019 12.7326 3.73991 12.5729C3.89963 12.4132 4.09755 12.3333 4.33366 12.3333C4.56977 12.3333 4.76769 12.4132 4.92741 12.5729C5.08713 12.7326 5.16699 12.9305 5.16699 13.1666C5.16699 13.4027 5.08713 13.6007 4.92741 13.7604C4.76769 13.9201 4.56977 14 4.33366 14ZM11.0003 14C10.7642 14 10.5663 13.9201 10.4066 13.7604C10.2469 13.6007 10.167 13.4027 10.167 13.1666C10.167 12.9305 10.2469 12.7326 10.4066 12.5729C10.5663 12.4132 10.7642 12.3333 11.0003 12.3333C11.2364 12.3333 11.4344 12.4132 11.5941 12.5729C11.7538 12.7326 11.8337 12.9305 11.8337 13.1666C11.8337 13.4027 11.7538 13.6007 11.5941 13.7604C11.4344 13.9201 11.2364 14 11.0003 14ZM1.83366 17.3333C1.37533 17.3333 0.982964 17.1701 0.656576 16.8437C0.330187 16.5173 0.166992 16.125 0.166992 15.6666V3.99996C0.166992 3.54163 0.330187 3.14926 0.656576 2.82288C0.982964 2.49649 1.37533 2.33329 1.83366 2.33329H2.66699V0.666626H4.33366V2.33329H11.0003V0.666626H12.667V2.33329H13.5003C13.9587 2.33329 14.351 2.49649 14.6774 2.82288C15.0038 3.14926 15.167 3.54163 15.167 3.99996V15.6666C15.167 16.125 15.0038 16.5173 14.6774 16.8437C14.351 17.1701 13.9587 17.3333 13.5003 17.3333H1.83366ZM1.83366 15.6666H13.5003V7.33329H1.83366V15.6666Z" />
									</svg>';

				$output .= '<p>' . esc_html_x( $post_data['post_date_formatted'], 'cozy-addons' ) . '</p>';
				$output .= '</a>';
			}

			$output .= '</div>';
		}

		if ( $attributes['enableOptions']['postContent'] ) {
			$output .= '<div class="post__content">';
			$output .= '<div>' . cozy_create_excerpt( $post_data['post_content'], $attributes['enableOptions']['postExcerpt'] ) . '</div>';
			$output .= '<span class="post__read-more"><a class="post__read-more-link" href="' . esc_url( $post_data['post_link'] ) . '" target="_blank" rel="noopener">' . esc_html_x( 'Read More', 'cozy-addons' ) . '</a></span>';
			$output .= '</div>';
		}

		$output .= '</div>';

		if ( $attributes['enableOptions']['postImage'] && 'right' === $attributes['postOptions']['image']['position'] ) {
			$classes   = array();
			$classes[] = 'post__image';
			$classes[] = $attributes['postOptions']['image']['hoverEffect'] ? 'has-hover-effect' : '';
			$output   .= '<figure class="' . implode( ' ', $classes ) . '"><a href="' . esc_url( $post_data['post_link'] ) . '" target="_blank" rel="noopener"><img src="' . $post_data['post_image_url'] . '" /></a></figure>';
		}

		$output .= '</li>';
	}
}

$selected_category             = 'category' === $attributes['sortBy'] && isset( $attributes['selectedCategory'] ) ? array( $attributes['selectedCategory'] ) : array();
$cozy_block_magazine_list_args = array(
	'post_type'           => 'post',
	'orderby'             => 'date',
	'order'               => 'DESC',
	'posts_per_page'      => $attributes['perPage'],
	'ignore_sticky_posts' => $attributes['enableOptions']['ignoreSticky'],
	'category__in'        => $selected_category,
);

$additional_post_data = get_cozy_block_magazine_list_posts( $cozy_block_magazine_list_args );

$classes   = array();
$classes[] = 'cozy-block-magazine-list__body';
$output   .= '<div class="' . implode( ' ', $classes ) . '">';
if ( ! empty( $additional_post_data ) ) {
	$classes   = array();
	$classes[] = 'cozy-block-magazine-list__posts';
	$classes[] = 'post__image-position-' . $attributes['postOptions']['image']['position'];
	$classes[] = $attributes['postOptions']['rowReverse'] ? 'has-row-reverse' : '';
	$output   .= '<ul class="' . implode( ' ', $classes ) . '">';
	foreach ( $additional_post_data as $key => $post_data ) {
		render_cozy_block_magazine_list_posts_data( $attributes, $post_data, $output );
	}
	$output .= '</ul>';
}
$output .= '</div>'; /* cozy-block-magazine-list__body <<closing>> */

if ( $attributes['ajaxLoader']['enabled'] ) {
	if ( 'default' === $attributes['ajaxLoader']['type'] ) {
		$cozy_block_magazine_list_args['posts_per_page'] = -1;
		$all_posts                                       = get_cozy_block_magazine_list_posts( $cozy_block_magazine_list_args );

		$remaining_posts = array_udiff(
			$all_posts,
			$additional_post_data,
			function ( $a, $b ) {
				return $a['ID'] - $b['ID'];
			}
		);

		$classes   = array();
		$classes[] = 'cozy-block-magazine-list__ajax-loader';
		$classes[] = empty( $remaining_posts ) ? 'display-none' : '';
		$output   .= '<div class="cozy-block-magazine-list__ajax-loader-wrapper">';
		$output   .= '<button class="' . implode( ' ', $classes ) . '">';
		$output   .= '<span>' . esc_html_x( $attributes['ajaxLoader']['label'], 'cozy-addons' ) . '</span>';

		$classes   = array();
		$classes[] = 'spinner';
		$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		$output   .= esc_html_x( $attributes['ajaxLoader']['loadingText'], 'cozy-addons' );
		$output   .= '<span class="cozy-block-magazine-list__dots"></span>';
		$output   .= '</div>';

		$output .= '</button>';
		$output .= '<div>';
	}

	if ( 'scroll' === $attributes['ajaxLoader']['type'] ) {
		$output   .= '<div style="text-align: center;">';
		$classes   = array();
		$classes[] = 'scroll-spinner';
		$classes[] = 'display-none';
		$classes[] = isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ? 'has-loading-text' : '';
		$output   .= '<div class="' . implode( ' ', $classes ) . '">';
		if ( isset( $attributes['ajaxLoader']['loadingText'] ) && ! empty( $attributes['ajaxLoader']['loadingText'] ) ) {
			$output .= esc_html_x( $attributes['ajaxLoader']['loadingText'], 'cozy-addons' );
			$output .= '<span class="cozy-block-magazine-list__dots"></span>';
		}
		$output .= '</div>';
		$output .= '</div>';
	}
}

$output .= '</div>';

$wrapper_attributes = get_block_wrapper_attributes();
$render             = sprintf( '<div class="cozy-block-wrapper"><div %1$s><style>%2$s</style> %3$s</div></div>', $wrapper_attributes, $block_styles, $output );
echo $render;
