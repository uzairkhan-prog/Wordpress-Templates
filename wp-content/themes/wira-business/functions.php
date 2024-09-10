<?php
/**
 * Wira Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wira Business
 * @since Wira Business 1.01
 */

if ( ! function_exists( 'wira_business_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Wira Business 1.01
	 *
	 * @return void
	 */
	function wira_business_styles() {
		// Register custom stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'custom-core',
			get_template_directory_uri() . '/assets/css/custom-core.css',
			array(),
			$version_string
		);

		wp_register_style(
			'admin-page',
			get_template_directory_uri() . '/assets/css/admin.css',
			array(),
			$version_string
		);

		// Enqueue custom stylesheet.
		wp_enqueue_style( 'custom-core' );
		wp_enqueue_style( 'admin-page' );
	}

endif;

add_action( 'init', 'wira_business_styles' );

if ( ! function_exists( 'wira_business_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since wira-business 1.01
	 * @return void
	 */
	function wira_business_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */

		wp_enqueue_block_style(
			'core',
			array(
				'handle' => 'custom-core',
				'src'    => get_parent_theme_file_uri( 'assets/css/custom-core.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/custom-core.css' ),
			)
		);
	}
endif;

add_action( 'init', 'wira_business_block_stylesheets' );

 /**
 * Load Block Function.
 */
require_once get_template_directory() . '/inc/init.php';

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'wira_business_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Wira Business 1.01
	 * @return void
	 */
	function wira_business_pattern_categories() {

		register_block_pattern_category(
			'wira_business_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'wira-business' ),
				'description' => __( 'A collection of full page layouts.', 'wira-business' ),
			)
		);

		register_block_pattern_category(
			'wira_business_theme',
			array(
				'label'       => _x( 'Theme Layout', 'Block pattern category', 'wira-business' ),
				'description' => __( 'A collection of pattern theme layout.', 'wira-business' ),
			)
		);
	}
endif;

add_action( 'init', 'wira_business_pattern_categories' );

// Patterns Custom Conditional

function wira_business_register_block_patterns() {

	$block_patterns = array(		
		'site-logo',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'wira_business_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'wira-business/' . $block_pattern,
			require $pattern_file
		); // register_block_pattern( string $pattern_name, array $pattern_properties )
	}

}

add_action( 'init', 'wira_business_register_block_patterns', 9 );

// Add Floating Post Share Button

function add_social_share_buttons($content) {
    // Get the current page URL
    $url = esc_url(get_permalink());

    // Get the current page title
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));

    // Create an array of social networks and their respective sharing URLs
    $social_networks = array(
        '' => 'https://www.facebook.com/sharer/sharer.php?u=' . $url,
        '' => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title,
        '' => 'https://www.linkedin.com/shareArticle?url=' . $url . '&title=' . $title,
        '' => 'https://pinterest.com/pin/create/button/?url=' . $url . '&description=' . $title,
    );

    // Initialize the share buttons HTML
    $share_buttons = '<div class="social-share-buttons">';

    // Loop through the social networks and generate the share buttons HTML
    foreach ($social_networks as $network => $share_url) {
        $share_buttons .= '<a class="wirawp-stack-small" href="' . $share_url . '" target="_blank" rel="noopener">' . $network . '</a>';
    }

    // Close the share buttons HTML
    $share_buttons .= '</div>';

    // Append the share buttons HTML to the content
    $content .= $share_buttons;

    return $content;
}

// Add the social share buttons after the content
add_filter('the_content', 'add_social_share_buttons');