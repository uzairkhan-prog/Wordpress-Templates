<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';

$bg_color       = isset( $attributes['boxStyles']['bgColor'] ) ? $attributes['boxStyles']['bgColor'] : '';
$bg_color_hover = isset( $attributes['boxStyles']['bgColorHover'] ) ? $attributes['boxStyles']['bgColorHover'] : '';

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$icon_color = array(
	'border'  => isset( $attributes['boxStyles']['borderColor'] ) ? $attributes['boxStyles']['borderColor'] : '',
	'default' => isset( $attributes['iconColor'] ) ? $attributes['iconColor'] : '',
	'hover'   => isset( $attributes['iconColorHover'] ) ? $attributes['iconColorHover'] : '',
);

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-social-icon-picker {
    margin-right: {$attributes['gap']}px;
}
#$block_id.stacked .cozy-block-social-icon-picker {
    padding: {$attributes['boxStyles']['padding']['top']}px {$attributes['boxStyles']['padding']['right']}px {$attributes['boxStyles']['padding']['bottom']}px {$attributes['boxStyles']['padding']['left']}px;
    border: {$attributes['boxStyles']['borderWidth']}px {$attributes['boxStyles']['borderType']} {$icon_color['border']};
    border-radius: {$attributes['boxStyles']['borderRadius']}px;
}
#$block_id.stacked.icon-color-custom .cozy-block-social-icon-picker {
    background: {$bg_color};
}
#$block_id.stacked a:hover .cozy-block-social-icon-picker {
    border-color: {$attributes['boxStyles']['borderColorHover']};
}
#$block_id.stacked.icon-color-custom a:hover .cozy-block-social-icon-picker {
    background: {$bg_color_hover};
}
#$block_id svg {
    width: {$attributes['iconSize']}px !important;
    height: {$attributes['iconSize']}px !important;
    opacity: {$attributes['iconOpacity']};
}
#$block_id.fill.icon-color-custom svg {
    fill: {$icon_color['default']};
}
#$block_id.fill.icon-color-custom a:hover .cozy-block-social-icon-picker svg {
    fill: {$icon_color['hover']};
}
#$block_id.outline.icon-color-custom svg {
    stroke: {$icon_color['default']};
    fill: none;
}
#$block_id.outline.icon-color-custom a:hover .cozy-block-social-icon-picker svg {
    stroke: {$icon_color['hover']};
    fill: none;
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
