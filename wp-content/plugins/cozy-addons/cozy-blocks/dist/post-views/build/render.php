<?php

if ( ! isset( $block->context['postId'] ) ) {
	return '';
}

$client_id = ! empty( $attributes['clientId'] ) ? $attributes['clientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

if ( ! function_exists( 'cozy_render_TRBL' ) ) {
	function cozy_render_TRBL( $type, $attr ) {
		if ( isset( $attr ) && count( $attr ) < 4 ) {
			if ( count( $attr ) === 1 ) {
				return "{$type}: {$attr};";
			}
			return "{$type}: {$attr['width']} {$attr['style']} {$attr['color']};";
		} elseif ( isset( $attr ) && count( $attr ) === 4 ) {
			$topWidth = $attr['top']['width'] ?? 'initial';
			$topStyle = $attr['top']['style'] ?? 'initial';
			$topColor = $attr['top']['color'] ?? 'initial';

			$rightWidth = $attr['right']['width'] ?? 'initial';
			$rightStyle = $attr['right']['style'] ?? 'initial';
			$rightColor = $attr['right']['color'] ?? 'initial';

			$bottomWidth = $attr['bottom']['width'] ?? 'initial';
			$bottomStyle = $attr['bottom']['style'] ?? 'initial';
			$bottomColor = $attr['bottom']['color'] ?? 'initial';

			$leftWidth = $attr['left']['width'] ?? 'initial';
			$leftStyle = $attr['left']['style'] ?? 'initial';
			$leftColor = $attr['left']['color'] ?? 'initial';

			if ( $type === 'border' ) {
				return "
                    border-top: {$topWidth} {$topStyle} {$topColor};
                    border-right: {$rightWidth} {$rightStyle} {$rightColor};
                    border-bottom: {$bottomWidth} {$bottomStyle} {$bottomColor};
                    border-left: {$leftWidth} {$leftStyle} {$leftColor};
                ";
			}
			return "{$type}: {$attr['top']} {$attr['right']} {$attr['bottom']} {$attr['left']};";
		} else {
			return '';
		}
	}
}

if ( ! function_exists( 'render_cozy_block_post_views_icon' ) ) {
	function render_cozy_block_post_views_icon( $attributes, $post_views_count ) {
		if ( $attributes['enableOptions']['icon'] && isset( $post_views_count ) && ! empty( $post_views_count ) && '0' != $post_views_count ) {
			$icon_fill      = 'fill' === $attributes['icon']['layout'] ? $attributes['icon']['color'] : 'none';
			$icon_stroke    = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['color'] : 'none';
			$stroke_width   = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['strokeWidth'] : '';
			$stroke_opacity = 'outline' === $attributes['icon']['layout'] ? $attributes['icon']['opacity'] / 100 : '';

			$icon = <<<ICON
				<div class="cozy-block-post-views__icon-wrapper view-{$attributes['icon']['view']} layout-{$attributes['icon']['layout']}">
					<svg
						width="{$attributes['icon']['size']}"
						height="{$attributes['icon']['size']}"
						class="cozy-block-post-views__icon"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="{$attributes['icon']['viewBox']['vx']} {$attributes['icon']['viewBox']['vy']} {$attributes['icon']['viewBox']['vw']} {$attributes['icon']['viewBox']['vh']}"
						aria-hidden="true"
						fill="{$icon_fill}"
						stroke="{$icon_stroke}"
						stroke-width="{$stroke_width}"
						stroke-opacity="{$stroke_opacity}"
					>
						<path d="{$attributes['icon']['path']}"/>
					</svg>
				</div>
			ICON;

			return $icon;
		}

		return '';
	}
}

$cozy_post_id     = $block->context['postId'];
$post_views_count = get_post_meta( $cozy_post_id, 'cozy_post_views_count', true );

$wrapper_attributes = get_block_wrapper_attributes();

$classes   = array();
$classes[] = 'display-' . $attributes['display'];

$block_extra_classes = implode( ' ', $classes );

$icon_box_padding = cozy_render_TRBL( 'padding', $attributes['iconBox']['padding'] );
$icon_box_border  = cozy_render_TRBL( 'border', $attributes['iconBox']['border'] );
$icon_color       = array(
	'bg' => isset( $attributes['iconBox']['bgColor'] ) ? $attributes['iconBox']['bgColor'] : '',
);

$label_color = isset( $attributes['label']['color'] ) ? $attributes['label']['color'] : '';

$block_styles = <<<BLOCK_STYLES
#$block_id.display-block {
    text-align: {$attributes['textAlign']};
}
#$block_id.display-block .cozy-block-post-views__wrapper {
    justify-content: {$attributes['textAlign']};
    margin: {$attributes['contentGap']} 0;
}
#$block_id.display-inline {
    justify-content: {$attributes['contentJustify']};
    gap: {$attributes['contentGap']};
}

#$block_id .cozy-block-post-views__wrapper {
	gap: {$attributes['icon']['gap']}
}

#$block_id .cozy-block-post-views__icon-wrapper.view-stacked {
	{$icon_box_padding}
	{$icon_box_border}
	border-radius: {$attributes['iconBox']['borderRadius']};
	background-color: {$icon_color['bg']};
}
#$block_id .cozy-block-post-views__icon {
	transform: rotate({$attributes['icon']['rotate']}deg);
}

#$block_id .cozy-block-post-views__label {
	font-size: {$attributes['label']['fontSize']};
	font-family: {$attributes['label']['fontFamily']};
	font-weight: {$attributes['label']['fontWeight']};
	color: {$label_color};
}
BLOCK_STYLES;

$output = '<div ' . $wrapper_attributes . '>';

$output .= '<style>' . $block_styles . '</style>';

$output .= '<div class="cozy-block-post-views ' . $block_extra_classes . '" id="' . $block_id . '">';

if ( isset( $attributes['label']['fontFamily'] ) && ! empty( $attributes['label']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . rawurlencode( $attributes['label']['fontFamily'] ) . ':wght@300;400;500;600;700;800;900" />';
}

if ( $attributes['enableOptions']['labelBefore'] ) {
	$output .= '<p class="cozy-block-post-views__label cozy-block-post-views__label-before">' . $attributes['labelBefore'] . '</p>';
}

$output .= '<div class="cozy-block-post-views__wrapper">';
if ( 'before' === $attributes['icon']['position'] ) {
	$output .= render_cozy_block_post_views_icon( $attributes, $post_views_count );
}

if ( $attributes['enableOptions']['views'] ) {
	$output .= isset( $post_views_count ) && '0' !== $post_views_count ? '<p class="cozy-block-post-views__view-count">' . $post_views_count . '</p>' : '';
}

if ( 'after' === $attributes['icon']['position'] ) {
	$output .= render_cozy_block_post_views_icon( $attributes, $post_views_count );
}
$output .= '</div>';

if ( $attributes['enableOptions']['labelAfter'] ) {
	$output .= '<p class="cozy-block-post-views__label cozy-block-post-views__label-after">' . $attributes['labelAfter'] . '</p>';
}

$output .= '</div></div>';

if ( isset( $post_views_count ) && ! empty( $post_views_count ) && '0' != $post_views_count ) {
	echo $output;
}
