<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozySidebarPanel_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockSidebarPanelInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$container_color = array(
	'bg'         => isset( $attributes['bgColor'] ) ? $attributes['bgColor'] : '',
	'text'       => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'text_hover' => isset( $attributes['typography']['colorHover'] ) ? $attributes['typography']['colorHover'] : '',
);

$icon_color = array(
	'default'        => isset( $attributes['iconColor'] ) ? $attributes['iconColor'] : '',
	'border_default' => isset( $attributes['iconBoxStyles']['borderColor'] ) ? $attributes['iconBoxStyles']['borderColor'] : '',
	'bg_default'     => isset( $attributes['iconBoxStyles']['bgColor'] ) ? $attributes['iconBoxStyles']['bgColor'] : '',
	'hover'          => isset( $attributes['iconColorHover'] ) ? $attributes['iconColorHover'] : '',
	'border_hover'   => isset( $attributes['iconBoxStyles']['borderColorHover'] ) ? $attributes['iconBoxStyles']['borderColorHover'] : '',
	'bg_hover'       => isset( $attributes['iconBoxStyles']['bgColorHover'] ) ? $attributes['iconBoxStyles']['bgColorHover'] : '',
);

$open_icon = array(
	'color' => array(
		'icon'       => isset( $attributes['openIcon']['color']['icon'] ) ? $attributes['openIcon']['color']['icon'] : '',
		'icon_hover' => isset( $attributes['openIcon']['color']['iconHover'] ) ? $attributes['openIcon']['color']['iconHover'] : '',
		'bg'         => isset( $attributes['openIcon']['color']['bg'] ) ? $attributes['openIcon']['color']['bg'] : '',
		'bg_hover'   => isset( $attributes['openIcon']['color']['bgHover'] ) ? $attributes['openIcon']['color']['bgHover'] : '',
	),
);

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-sidebar-panel-wrapper{
    padding: {$attributes['sidebarPadding']['top']}px {$attributes['sidebarPadding']['right']}px {$attributes['sidebarPadding']['bottom']}px {$attributes['sidebarPadding']['left']}px;
    background-color: {$container_color['bg']};
    z-index: {$attributes['zIndex']};
}
#$block_id.layout-custom .cozy-sidebar-panel-wrapper {
    width: {$attributes['width']}px;
}
#$block_id .sidebar-icon-wrapper svg {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
    rotate: {$attributes['iconRotate']}deg;
    opacity: {$attributes['iconOpacity']};
}
#$block_id.icon-layout-fill .sidebar-icon-wrapper svg {
    fill: {$icon_color['default']};
}
#$block_id.icon-layout-outline .sidebar-icon-wrapper svg {
    stroke: {$icon_color['default']};
    fill: none;
}
#$block_id.icon-layout-fill .sidebar-icon-wrapper:hover svg, #$block_id.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    fill: {$icon_color['hover']};
}
#$block_id.icon-layout-outline .sidebar-icon-wrapper:hover svg, #$block_id.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    stroke: {$icon_color['hover']};
    fill: none;
}
#$block_id.icon-view-stacked .sidebar-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$icon_color['border_default']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$icon_color['bg_default']};
}
#$block_id.icon-view-stacked .sidebar-icon-wrapper:hover, #$block_id.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {
    border-color: {$icon_color['border_hover']};
    background-color: {$icon_color['bg_hover']};
}
#$block_id .relative {
    padding: {$attributes['closeIcon']['verticalSpacing']}px 0;
    margin: 0 {$attributes['closeIcon']['horizontalSpacing']}px;
}
#$block_id .open-icon-wrapper {
    gap: {$attributes['openIcon']['gap']}px;
    font: {$attributes['typography']['fontWeight']} {$attributes['typography']['fontSize']}px {$attributes['typography']['fontFamily']};
    color: {$container_color['text']};
}
#$block_id .open-icon-wrapper:hover {
    color: {$container_color['text_hover']};
}
#$block_id.icon-layout-fill .open-icon-wrapper .sidebar-icon-wrapper svg {
    fill: {$open_icon['color']['icon']};
}
#$block_id.icon-layout-outline .open-icon-wrapper .sidebar-icon-wrapper svg {
    stroke: {$open_icon['color']['icon']};
    fill: none;
}
#$block_id.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    fill: {$open_icon['color']['icon_hover']};
}
#$block_id.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    stroke: {$open_icon['color']['icon_hover']};
    fill: none;
}
#$block_id.icon-view-stacked .open-icon-wrapper .sidebar-icon-wrapper {
    background-color: {$open_icon['color']['bg']};
}
#$block_id.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {
    background-color: {$open_icon['color']['bg_hover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
