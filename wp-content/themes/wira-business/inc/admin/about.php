<?php

// About Theme
function wirawp_dashboard()
{
    add_theme_page(esc_html__('About Wirawp Theme', 'wira-business'), esc_html__('Wira Business Dashboard', 'wira-business'), 'edit_theme_options', 'wira-business', 'wira_business_theme_info_display');
}
add_action('admin_menu', 'wirawp_dashboard');
function wira_business_theme_info_display()
{ ?>
    <div class="dashboard-wirawp">
        <div class="wirawp-dashboard">
            <div>
                <div>
                    <h1> <?php echo __('Welcome to the Wirawp Theme', 'wira-business') ?></h1>
                    <p><?php echo __('Discover the power and flexibility of our Full Site Editing (FSE) Block-Based Theme. Designed for seamless performance and lightning-fast loading, our theme requires no additional plugins to deliver exceptional functionality. Enjoy a streamlined and efficient website-building experience, right out of the box. ', 'wira-business') ?></p>
                    <div class="wirawp-no-plugin">
						<h3><?php echo __('No Required Plugins Needed', 'wira-business'); ?></h3>
						<p class="notice-text"><?php echo __('You can use this theme without install additional plugins for functionality', 'wira-business') ?></p>
					</div>
                </div>
                <div class="wirawp-pro">
					<h2><?php echo __('Explore Premium Themes', 'wira-business') ?></h2>
					<p><?php echo __("Our Premium theme comes packed with features including animated transitions, a versatile slider function, dynamic post types, and pre-made demo starter themes. Unleash the full potential of your website with our comprehensive and user-friendly theme.", 'wira-business') ?></p>
					<ul>
						<li class="wirawp-check-list"><?php echo __('Premium Made Website Layout Demo Import', 'wira-business') ?></li>
						<li  class="wirawp-check-list"><?php echo __('More Features Added', 'wira-business') ?></li>
						<li  class="wirawp-check-list"><?php echo __('Full Documentation', 'wira-business') ?></li>
						<li  class="wirawp-check-list"><?php echo __('And Much More', 'wira-business') ?></li>
					</ul>
					<a href="https://wirawp.com/" class="wirawp-btn-admin wirawp-btn-live button" target="_blank"><?php echo __('Explore Other Theme', 'wira-business') ?></a>
                </div>
            </div>
        </div>
    </div>
<?php
}