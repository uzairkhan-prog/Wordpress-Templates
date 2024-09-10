<?php
/**
 * Theme About Page
 *
 * @package Studies
 * @since 1.0
 */

function studies_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_studies-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'studies-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'studies_theme_page_admin_style' );

/**
 * Add theme page
 */
function studies_menu() {
	add_theme_page( esc_html__( 'Studies Theme Info', 'studies' ), esc_html__( 'Studies Theme Info', 'studies' ), 'edit_theme_options', 'studies-theme', 'studies_theme_page_display' );
}
add_action( 'admin_menu', 'studies_menu' );

/**
 * Display About page
 */
function studies_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'studies' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://starthemes.net/','studies'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/starlogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Studies!', 'studies' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Studies theme has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'studies' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Studies Pro Theme', 'studies' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Studies Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'studies' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://starthemes.net/wordpress-themes/studies-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Studies Pro', 'studies' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'studies' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://starthemes.net/wordpress-themes/studies-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'studies' ); ?></a>
						<a target="_blank" href="https://starthemesdemo.net/studies/"><?php esc_html_e( 'View Demo', 'studies' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://starthemes.net/support/' ); ?>"><?php esc_html_e( 'Support', 'studies' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'studies' ); ?></h3>
						<p><?php esc_html_e( 'Loved Studies? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'studies' ); ?></p>
						<a href="https://wordpress.org/support/theme/studies/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'studies' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
