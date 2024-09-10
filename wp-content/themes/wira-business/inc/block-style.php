<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Wira Business
 * @since 1.0.0
 */

if ( ! function_exists( 'wira_business_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Wira Business 1.0
	 * @return void
	 */
	function wira_business_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'wira-business' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary::after {
					content: "\f078";
					font-family: Font Awesome Free;
					font weight: 900;
					font-size: inhierit !important;
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'wira-business' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list-light',
				'label'        => __( 'Checkmark Light', 'wira-business' ),
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list-dark',
				'label'        => __( 'Checkmark Dark', 'wira-business' ),
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'icon-right-light',
				'label'        => __( 'Icon Right Light', 'wira-business' ),
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'icon-right-dark',
				'label'        => __( 'Icon Right Dark', 'wira-business' ),
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'         => 'hover-dark',
				'label'        => __( 'Hover Dark', 'wira-business' ),
			)
		);

        /* - Styles for custom Button dark - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-primary',
				'label'        => __( 'Button Primary', 'wira-business' ),
			)
		);

        /* - Styles for custom Button Secondary - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-secondary',
				'label'        => __( 'Button Secondary', 'wira-business' ),
			)
		);

        /* - Styles for custom Button Transparent - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-transparent',
				'label'        => __( 'Button Transparent', 'wira-business' ),
            )
        );

        /* - Styles for custom Button Link - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-link',
				'label'        => __( 'Button Link', 'wira-business' ),
			)
		);

		/* - Styles for custom Button Link Secondary - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-link-secondary',
				'label'        => __( 'Button Link Secondary', 'wira-business' ),
			)
		);

		/* - Styles for custom Button Link Arrow - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-link-arrow',
				'label'        => __( 'Button Link Arrow', 'wira-business' ),
			)
		);

		/* - Styles for custom Button Link Arrow Secondary - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-link-arrow-secondary',
				'label'        => __( 'Button Link Arrow Secondary', 'wira-business' ),
			)
		);

		/* - Styles for custom Button Link Phone - */
		register_block_style(
			'core/button',
			array(
				'name'         => 'btn-link-phone',
				'label'        => __( 'Button Link Phone', 'wira-business' ),
			)
		);

        /* - Styles for custom Subheading - */
		register_block_style(
			'core/heading',
			array(
				'name'         => 'subheading',
				'label'        => __( 'Subheading', 'wira-business' ),
			)
		);

        /* - Styles for custom Block Quote Style - */
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'block-quote-paragraph',
				'label'        => __( 'Block Quote Style', 'wira-business' ),
			)
		);

        /* - Styles for custom Quote Style - */
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'quote-paragraph',
				'label'        => __( 'Quote Style', 'wira-business' ),
			)
		);

		/* - Styles for custom Group Block - */
		register_block_style(
			'core/group',
			array(
				'name'         => 'block-section',
				'label'        => __( 'Block Section', 'wira-business' ),
			)
		);

		/* - Styles for custom Box Shadow - */
		register_block_style(
			'core/group',
			array(
				'name'         => 'box-shadow',
				'label'        => __( 'With Box Shadow', 'wira-business' ),
			)
		);

		/* - Styles for custom Accordion - */
		register_block_style(
			'core/group',
			array(
				'name'         => 'accordion',
				'label'        => __( 'Accordion Block', 'wira-business' ),
			)
		);

		/* - Styles for custom Columns Reverse - */
		register_block_style(
			'core/columns',
			array(
				'name'         => 'columns-reverse',
				'label'        => __( 'Columns Reverse', 'wira-business' ),
			)
		);

		/* - Styles for custom Columns Reverse - */
		register_block_style(
			'core/cover',
			array(
				'name'         => 'cover-mobile-3',
				'label'        => __( 'Cover Height 100% Responsive', 'wira-business' ),
			)
		);
	}
endif;

add_action( 'init', 'wira_business_block_styles' );