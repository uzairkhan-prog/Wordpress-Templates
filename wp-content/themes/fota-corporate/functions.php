<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function fota_corporate_scripts()
{
    // enqueue parent style
    wp_enqueue_style('fota-corporate-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'fota_corporate_scripts');
/**
 * Registers pattern categories.
 *
 * @since fota-corporate 1.0.0
 *
 * @return void
 */
function fota_corporate_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'fota-corporate-patterns' => array('label' => __('Fota Corporate Patterns', 'fota-corporate'))
    );

    $block_pattern_categories = apply_filters('fota_corporate_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'fota_corporate_register_pattern_category', 9);
