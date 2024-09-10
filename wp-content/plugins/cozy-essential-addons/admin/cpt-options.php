<?php
if (!defined('ABSPATH')) exit;

if (cozythemes_demo_importer_premium_access()) {
    if (!class_exists('CT_CPT_Option_Menu')) :
        class CT_CPT_Option_Menu
        {
            public function __construct()
            {
                add_action('admin_menu', array($this, 'register_ct_cpt_option_menus'), 11);
            }

            public function register_ct_cpt_option_menus()
            {
                add_submenu_page(
                    '_cozy_companions',
                    'CPT Options',
                    'CPT Options',
                    'manage_options',
                    '_ct_cpt_option',
                    'ct_cpt_options_dashboard_page'
                );

                function ct_cpt_default_options(){
                    return array(
                        'portfolio_enabled' => "1",
                        'testimonial_enabled' => "1",
                        'team_enabled' => "1",
                        'faq_enabled' => "1",
                        'promotion_enabled' => "1",
                        'service_enabled' => "1",
                    );
                }

                // Register and sanitize the plugin settings
                function ct_cpt_options_init()
                {
                    $args = array(
                        'sanitize_callback' => 'ct_custom_options_sanitize',
                        'default' => ct_cpt_default_options(),
                    );

                    register_setting(
                        'ct_custom_options_settings_group', // Option group
                        'ct_custom_options_settings', // Option name
                        $args
                    );

                }

                if (!get_option('ct_custom_options_settings')) {
                    // Option doesn't exist, so set the default value
                    add_option('ct_custom_options_settings', ct_cpt_default_options());
                }

                add_action('admin_init', 'ct_cpt_options_init');

                // Sanitization callback function
                function ct_custom_options_sanitize($input)
                {
                    return $input;
                }

                // Callback function to render the custom options dashboard page
                function ct_cpt_options_dashboard_page()
                {

?>

                    <div class="wrap">
                        <h1><?php echo __('Custom Post Types Options', 'cozy-addons') ?></h1>
                        <?php if (isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true') { ?>
                            <div class="notice notice-success is-dismissible">
                                <p><?php _e('Saved successfully.', 'cozy-addons'); ?></p>
                            </div>
                        <?php } ?>

                        <form method="post" action="options.php">
                            <?php settings_fields('ct_custom_options_settings_group'); ?>
                            <?php 
                            $options = get_option('ct_custom_options_settings'); 
                            ?>
                            <table class="form-table">
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ct_custom_options_settings[portfolio_enabled]" value="<?php echo $options['porfolio_enabled']??1 ?>" <?php checked(isset($options['portfolio_enabled']) && $options['portfolio_enabled'] == 1); ?>>
                                        <?php echo __('Enable Portfolio', 'cozy-addons'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ct_custom_options_settings[testimonial_enabled]" value="<?php echo $options['testimonial_enabled']??1 ?>" <?php checked(isset($options['testimonial_enabled']) && $options['testimonial_enabled'] == 1); ?>>
                                        <?php echo __('Enable Testimonial', 'cozy-addons'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ct_custom_options_settings[team_enabled]" value="<?php echo $options['team_enabled']??1 ?>" <?php checked(isset($options['team_enabled']) && $options['team_enabled'] == 1); ?>>
                                        <?php echo __('Enable Teams', 'cozy-addons'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ct_custom_options_settings[faq_enabled]" value="<?php echo $options['faq_enabled']??1 ?>" <?php checked(isset($options['faq_enabled']) && $options['faq_enabled'] == 1); ?>>
                                        <?php echo __('Enable FAQs', 'cozy-addons'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ct_custom_options_settings[promotion_enabled]" value="<?php echo $options['promotion_enabled']??1 ?>" <?php checked(isset($options['promotion_enabled']) && $options['promotion_enabled'] == 1); ?>>
                                        <?php echo __('Enable Promotions', 'cozy-addons'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ct_custom_options_settings[service_enabled]" value="<?php echo $options['service_enabled']??1 ?>" <?php checked(isset($options['service_enabled']) && $options['service_enabled'] == 1); ?>>
                                        <?php echo __('Enable Service', 'cozy-addons'); ?>
                                    </td>
                                </tr>
                            </table>
                            
                            <?php submit_button(); ?>
                        </form>
                    </div>


<?php
                }
            }
        }
        $CT_CPT_OptionMenu = new CT_CPT_Option_Menu;
    endif;
}
