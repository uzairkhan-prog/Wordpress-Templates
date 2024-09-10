<?php 

/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage journeytourism
 * @since journeytourism1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function journeytourism_customize_register( $wp_customize ) {
	$wp_customize->add_section( new JourneyTourism_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'JourneyTourism Pro', 'journey-turism' ),
		'button_text'      => __( 'Upgrade Pro', 'journey-turism' ),
		'url'              => esc_url( JourneyTourism_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'journeytourism_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function journeytourism_custom_control_scripts() {
	wp_enqueue_script( 'journeytourism-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'journeytourism_custom_control_scripts' );
?>