<?php

// Welcome Notice

if (!function_exists('wira_business_welcome_notice')) :
    function wira_business_welcome_notice()
    {
        if (get_option('wira_business_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $wira_business_version = $theme->get('Version');


?>
            <div class="wira-business-admin-notice notice notice-info is-dismissible" id="wira-business-dismiss-notice">
                <div>
                    <div class="wirawp-notice-content">
                        <h5 class="wirawp-subheading-admin"><span><span><?php echo __('Welcome to Wira Business Theme', 'wira-business'); ?></span></h5>
                        <h1><?php echo __('Congratulations, Your WordPress Website is Now Ready!', 'wira-business'); ?></h1>
                        <div class="wirawp-no-plugin wirawp-notice">
							<h3><?php echo __('No Required Plugins Needed', 'wira-business'); ?></h3>
							<p class="notice-text"><?php echo __('You can use this theme without install additional plugins for functionality', 'wira-business') ?></p>
						</div>
                        <div class="wirawp-notice-text">
                            <p><?php echo __('Discover the power and flexibility of our Full Site Editing (FSE) Block-Based Theme. Designed for seamless performance and lightning-fast loading, our theme requires no additional plugins to deliver exceptional functionality. Enjoy a streamlined and efficient website-building experience, right out of the box.', 'wira-business') ?></p>
                        </div>
                        <a href="<?php echo admin_url(); ?>site-editor.php" class="button wirawp-btn-admin wirawp-btn-edit-theme"><?php echo __('Edit This Theme', 'wira-business'); ?></a>
                        <a href="<?php echo site_url(); ?>" target="_blank" class="button wirawp-btn-admin-second wirawp-btn-live"><?php echo __('See Live Website', 'wira-business'); ?></a>
                    </div>
                </div>
                <div class="wirawp-hero-shot">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/screenshot.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'wira_business_welcome_notice');