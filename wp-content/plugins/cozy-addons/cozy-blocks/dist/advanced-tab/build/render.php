<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyAdvancedTab_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockAdvancedTabInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$container_color = array(
	'border' => isset( $attributes['containerStyles']['border']['color'] ) ? $attributes['containerStyles']['border']['color'] : '',
	'bg'     => isset( $attributes['containerStyles']['bgColor'] ) ? $attributes['containerStyles']['bgColor'] : '',
);

$title_color = array(
	'text' => isset( $attributes['titleTypography']['color'] ) ? $attributes['titleTypography']['color'] : '',
);

$tab_title_color = array(
	'border' => isset( $attributes['separatorStyles']['border']['color'] ) ? $attributes['separatorStyles']['border']['color'] : '',
	'text'   => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
);

$tab_width = isset( $attributes['tabStyles']['width'] ) ? $attributes['tabStyles']['width'] : '';
$tab_after = $attributes['enableTabAfter'] ? $attributes['separatorStyles']['border']['width']['bottom'] . 'px' : '';
$tab_color = array(
	'border'        => isset( $attributes['tabStyles']['border']['color'] ) ? $attributes['tabStyles']['border']['color'] : '',
	'bg'            => isset( $attributes['tabStyles']['bgColor'] ) ? $attributes['tabStyles']['bgColor'] : '',
	'active_bg'     => isset( $attributes['tabStyles']['bgColorActive'] ) ? $attributes['tabStyles']['bgColorActive'] : '',
	'active_text'   => isset( $attributes['typography']['colorActive'] ) ? $attributes['typography']['colorActive'] : '',
	'active_border' => isset( $attributes['tabStyles']['border']['colorActive'] ) ? $attributes['tabStyles']['border']['colorActive'] : '',
);

$icon_color = array(
	'icon'        => isset( $attributes['typography']['color'] ) ? $attributes['typography']['color'] : '',
	'active_icon' => isset( $attributes['typography']['colorActive'] ) ? $attributes['typography']['colorActive'] : '',
);

$content_color = array(
	'border' => isset( $attributes['contentStyles']['border']['color'] ) ? $attributes['contentStyles']['border']['color'] : '',
	'bg'     => isset( $attributes['contentStyles']['bgColor'] ) ? $attributes['contentStyles']['bgColor'] : '',
);

$block_styles = <<<BLOCK_STYLES
#$block_id {
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
    border-style: {$attributes['containerStyles']['border']['type']};
    border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
    border-color: {$container_color['border']};
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$container_color['bg']};
}

#$block_id .advanced-tab-title {
    font-weight: {$attributes['titleTypography']['fontWeight']};
    font-size: {$attributes['titleTypography']['fontSize']}px;
    font-family: {$attributes['titleTypography']['fontFamily']};
    color: {$title_color['text']};
}

#$block_id .cozy-tab-title {
    padding: {$attributes['separatorStyles']['padding']['top']}px {$attributes['separatorStyles']['padding']['right']}px {$attributes['separatorStyles']['padding']['bottom']}px {$attributes['separatorStyles']['padding']['left']}px;
    border-style: {$attributes['separatorStyles']['border']['type']};
    border-width: {$attributes['separatorStyles']['border']['width']['top']}px {$attributes['separatorStyles']['border']['width']['right']}px {$attributes['separatorStyles']['border']['width']['bottom']}px {$attributes['separatorStyles']['border']['width']['left']}px;
    border-color: {$tab_title_color['border']};
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$tab_title_color['text']};
}

#$block_id.layout-horizontal .cozy-tab-title {
    gap: {$attributes['columnGap']}px;
    justify-content: {$attributes['tabAlign']};
}

#$block_id .cozy-tab-title .cozy-tab-button {
    padding: {$attributes['tabStyles']['padding']['top']}px {$attributes['tabStyles']['padding']['right']}px {$attributes['tabStyles']['padding']['bottom']}px {$attributes['tabStyles']['padding']['left']}px;
    border-style: {$attributes['tabStyles']['border']['type']};
    border-width: {$attributes['tabStyles']['border']['width']['top']}px {$attributes['tabStyles']['border']['width']['right']}px {$attributes['tabStyles']['border']['width']['bottom']}px {$attributes['tabStyles']['border']['width']['left']}px;
    border-color: {$tab_color['border']};
    border-radius: {$attributes['tabStyles']['borderRadius']['top']}px {$attributes['tabStyles']['borderRadius']['right']}px {$attributes['tabStyles']['borderRadius']['bottom']}px {$attributes['tabStyles']['borderRadius']['left']}px;
    background-color: {$tab_color['bg']};
}

#$block_id.layout-vertical .cozy-tab-title .cozy-tab-button {
    width: {$tab_width}px;
}

#$block_id .cozy-tab-title .cozy-tab-button .display-flex {
    gap: {$attributes['iconSpacing']}px;
}

#$block_id .cozy-tab-title .cozy-tab-button.active {
    border-color: {$tab_color['active_border']};
    background-color: {$tab_color['active_bg']};
    color: {$tab_color['active_text']};
}

#$block_id .cozy-tab-title .cozy-tab-button.active:after {
    height: {$tab_after};
    bottom: -{$attributes['separatorStyles']['border']['width']['bottom']}px;
    background-color: {$tab_color['active_bg']};
}

#$block_id .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
}

#$block_id.icon-layout-fill .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
    fill: {$icon_color['icon']};
}

#$block_id.icon-layout-outline .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
    stroke: {$icon_color['icon']};
    fill: none;
}

#$block_id.icon-layout-fill .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
    fill: {$icon_color['active_icon']};
}

#$block_id.icon-layout-outline .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
    stroke: {$icon_color['active_icon']};
    fill: none;
}

#$block_id.layout-vertical {
    gap: {$attributes['columnGap']}px;
}

#$block_id.layout-vertical .cozy-tab-title {
    gap: {$attributes['rowGap']}px;
}

#$block_id .cozy-advanced-tab-wrapper {
    padding: {$attributes['contentStyles']['padding']['top']}px {$attributes['contentStyles']['padding']['right']}px {$attributes['contentStyles']['padding']['bottom']}px {$attributes['contentStyles']['padding']['left']}px;
    border-style: {$attributes['contentStyles']['border']['type']};
    border-width: {$attributes['contentStyles']['border']['width']['top']}px {$attributes['contentStyles']['border']['width']['right']}px {$attributes['contentStyles']['border']['width']['bottom']}px {$attributes['contentStyles']['border']['width']['left']}px;
    border-color: {$content_color['border']};
    border-radius: {$attributes['contentStyles']['borderRadius']['top']}px {$attributes['contentStyles']['borderRadius']['right']}px {$attributes['contentStyles']['borderRadius']['bottom']}px {$attributes['contentStyles']['borderRadius']['left']}px;
    background-color: {$content_color['bg']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
