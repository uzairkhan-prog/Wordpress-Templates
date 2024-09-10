<?php
/**
 * Site Logo
 */

include_once ABSPATH . 'wp-admin/includes/plugin.php';

if ( has_custom_logo() ) {
	return array(
		'title'      => esc_html__( 'Site Logo', 'wira-business' ),
		'categories' => array( 'hidden' ),
		'content'    => '<!-- wp:site-logo {"width":150} /-->',
	);
} else {
	return array(
		'title'      => esc_html__( 'Site Logo', 'wira-business' ),	
		'categories' => array( 'hidden' ),
		'content'    => '<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-primary"},":hover":{"color":{"text":"var:preset|color|custom-secondary"}}}},"typography":{"fontSize":"30px"}},"textColor":"custom-white"} /-->',
	);
}
