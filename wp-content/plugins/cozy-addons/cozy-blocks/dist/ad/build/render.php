<?php
$client_id = ! empty( $attributes['clientId'] ) ? $attributes['clientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$image = array(
	'width'    => isset( $attributes['media']['width'] ) ? $attributes['media']['width'] : '',
	'height'   => isset( $attributes['media']['height'] ) ? $attributes['media']['height'] : '',
	'position' => array(
		'x' => isset( $attributes['media']['position']['x'] ) ? floatval( $attributes['media']['position']['x'] ) * 100 : '',
		'y' => isset( $attributes['media']['position']['y'] ) ? floatval( $attributes['media']['position']['y'] ) * 100 : '',
	),
	'radius'   => cozy_render_TRBL( 'border-radius', $attributes['media']['radius'] ),
);

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-ad__image-wrapper {
    max-width: {$image['width']};
    max-height: {$image['height']};
}
#$block_id .cozy-block-ad__image-wrapper.align-center {
    margin: 0 auto;
}
#$block_id .cozy-block-ad__image-wrapper.align-right {
    margin: 0 0 0 auto;
}
#$block_id .cozy-block-ad__image-wrapper.object-fit-contain {
    text-align: {$attributes['media']['align']};
}
#$block_id .cozy-block-ad__image {
    height: {$image['height']};
    object-fit: {$attributes['media']['objectFit']};
    {$image['radius']}
}
#$block_id .object-fit-cover .cozy-block-ad__image {
    object-position: {$image['position']['x']}% {$image['position']['y']}%;
}
BLOCK_STYLES;

$render = sprintf( '<div class="cozy-block-wrapper"><style>%1$s</style>%2$s</div>', $block_styles, $content );
echo $render;
