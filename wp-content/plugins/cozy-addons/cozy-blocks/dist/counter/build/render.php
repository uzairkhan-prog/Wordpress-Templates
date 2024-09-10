<?php

$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyCounter_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockCounterInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$color = isset( $attributes['styles']['color'] ) ? $attributes['styles']['color'] : '';

$block_styles = <<<BLOCK_STYLES
#$block_id {
    text-align: {$attributes['textAlign']};
    font-size: {$attributes['styles']['fontSize']}px;
    font-weight: {$attributes['styles']['fontWeight']};
    font-family: {$attributes['styles']['fontFamily']}, "sans-serif";
    color: {$color};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
