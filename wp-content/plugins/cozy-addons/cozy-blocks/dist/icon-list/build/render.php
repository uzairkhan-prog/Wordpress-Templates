<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$color                   = isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '';
$color_hover             = isset( $attributes['typography']['colorHover'] ) ? $attributes['typography']['colorHover'] : '';
$item_padding_top        = isset( $attributes['containerStyles']['padding']['top'] ) ? $attributes['containerStyles']['padding']['top'] : '';
$item_padding_right      = isset( $attributes['containerStyles']['padding']['right'] ) ? $attributes['containerStyles']['padding']['right'] : '';
$item_padding_bottom     = isset( $attributes['containerStyles']['padding']['bottom'] ) ? $attributes['containerStyles']['padding']['bottom'] : '';
$item_padding_left       = isset( $attributes['containerStyles']['padding']['left'] ) ? $attributes['containerStyles']['padding']['left'] : '';
$item_border_width       = isset( $attributes['containerStyles']['borderWidth'] ) ? $attributes['containerStyles']['borderWidth'] : '';
$item_border_type        = isset( $attributes['containerStyles']['borderType'] ) ? $attributes['containerStyles']['borderType'] : '';
$item_border_color       = isset( $attributes['containerStyles']['borderColor'] ) ? $attributes['containerStyles']['borderColor'] : '';
$item_border_color_hover = isset( $attributes['containerStyles']['borderColorHover'] ) ? $attributes['containerStyles']['borderColorHover'] : '';
$item_bg_color           = isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '';
$item_bg_color_hover     = isset( $attributes['containerStyles']['bgColorHover'] ) ? $attributes['containerStyles']['bgColorHover'] : '';

$icon_box_bg_color_hover = isset( $attributes['iconBoxStyles']['bgColorHover'] ) ? $attributes['iconBoxStyles']['bgColorHover'] : '';

$icon_color = array(
	'default'        => isset( $attributes['iconColor'] ) ? $attributes['iconColor'] : '',
	'default_bg'     => isset( $attributes['iconBoxStyles']['bgColor'] ) ? $attributes['iconBoxStyles']['bgColor'] : '',
	'default_border' => isset( $attributes['iconBoxStyles']['borderColor'] ) ? $attributes['iconBoxStyles']['borderColor'] : '',
	'hover'          => isset( $attributes['iconColorHover'] ) ? $attributes['iconColorHover'] : '',
	'hover_border'   => isset( $attributes['iconBoxStyles']['borderColorHover'] ) ? $attributes['iconBoxStyles']['borderColorHover'] : '',
);

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-list-item {
    width: {$attributes['containerStyles']['width']}px;
    height: {$attributes['containerStyles']['height']}px;
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$item_bg_color};
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$color};
    text-align: {$attributes['textAlign']};
    padding: {$item_padding_top}px {$item_padding_right}px {$item_padding_bottom}px {$item_padding_left}px;
    border-width: {$item_border_width}px;
    border-style: {$item_border_type};
    border-color: {$item_border_color};
    gap: {$attributes['iconGap']}px;
}

#$block_id .cozy-block-list-item:hover {
    background-color: {$item_bg_color_hover};
    color: {$color_hover};
    border-color: {$item_border_color_hover};
}

#$block_id.vertical .list-inline-block {
    margin-bottom: {$attributes['containerStyles']['gap']}px;
}

#$block_id.horizontal .list-inline-block {
    margin-right: {$attributes['containerStyles']['gap']}px;
}

#$block_id svg {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
    rotate: {$attributes['iconRotate']}deg;
    opacity: {$attributes['iconOpacity']};
}

#$block_id.fill svg {
    fill: {$icon_color['default']};
}

#$block_id.outline svg {
    stroke: {$icon_color['default']};
    fill: none;
}

#$block_id.fill .cozy-block-list-item:hover svg {
    fill: {$icon_color['hover']};
}

#$block_id.outline .cozy-block-list-item:hover svg {
    stroke: {$icon_color['hover']};
    fill: none;
}

#$block_id.stacked .list-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$icon_color['default_border']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$icon_color['default_bg']};
}

#$block_id.stacked .cozy-block-list-item:hover .list-icon-wrapper {
    background-color: {$icon_box_bg_color_hover};
    border-color: {$icon_color['hover_border']};
}
BLOCK_STYLES;

$output = '<div class="cozy-block-wrapper">';
if ( isset( $attributes['typography']['fontFamily'] ) && ! empty( $attributes['typography']['fontFamily'] ) ) {
	$output .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=' . $attributes['typography']['fontFamily'] . ':wght@100;200;300;400;500;600;700;800;900" />';
}
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
