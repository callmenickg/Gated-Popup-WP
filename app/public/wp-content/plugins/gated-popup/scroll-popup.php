<?php
/**
 * Plugin Name: Scroll Popup with HubSpot Form
 * Description: Displays a popup with a HubSpot form after a certain page scroll.
 * Version: 1.0
 * Author: Nick
 */

// Enqueue scripts and styles
function scroll_popup_enqueue_scripts() {
    wp_enqueue_style('scroll-popup-css', plugin_dir_url(__FILE__) . 'css/scroll-popup.css');
    wp_enqueue_script('scroll-popup-js', plugin_dir_url(__FILE__) . 'js/scroll-popup.js', array('jquery'), null, true);

    // Enqueue the HubSpot script
    wp_enqueue_script('hubspot-forms-js', 'https://js.hsforms.net/forms/v2.js', array(), null, true);


    // Pass the HubSpot details from WordPress to JavaScript
    wp_localize_script('scroll-popup-js', 'hubspotData', array(
        'portal_id' => get_option('hubspot_portal_id'),
        'form_id'   => get_option('hubspot_form_id')
    ));
}
add_action('wp_enqueue_scripts', 'scroll_popup_enqueue_scripts');

// Admin menu for HubSpot form settings
function scroll_popup_admin_menu() {
    add_options_page(
        'Scroll Popup Settings',
        'Scroll Popup',
        'manage_options',
        'scroll-popup-settings',
        'scroll_popup_settings_page'
    );
}
add_action('admin_menu', 'scroll_popup_admin_menu');

// Settings page for HubSpot form
function scroll_popup_settings_page() {
    if (isset($_POST['submit'])) {
        update_option('hubspot_portal_id', sanitize_text_field($_POST['hubspot_portal_id']));
        update_option('hubspot_form_id', sanitize_text_field($_POST['hubspot_form_id']));
    }

    $portal_id = get_option('hubspot_portal_id');
    $form_id = get_option('hubspot_form_id');
    ?>
    <div class="wrap">
        <h1>Scroll Popup Settings</h1>
        <form method="POST">
            <label for="hubspot_portal_id">HubSpot Portal ID:</label>
            <input type="text" name="hubspot_portal_id" value="<?php echo esc_attr($portal_id); ?>" required><br><br>
            <label for="hubspot_form_id">HubSpot Form ID:</label>
            <input type="text" name="hubspot_form_id" value="<?php echo esc_attr($form_id); ?>" required><br><br>
            <input type="submit" name="submit" value="Save Settings" class="button button-primary">
        </form>
    </div>
    <?php
}

// Add the popup to posts
function scroll_popup_add_to_posts() {
    if (is_single()) {
        ?>
        <div id="scroll-popup" class="scroll-popup">
            <div class="scroll-popup-content">
                <span id="scroll-popup-close" class="scroll-popup-close">&times;</span>
                <div id="hubspot-form"></div>
            </div>
        </div>
        <?php
    }
}
add_action('wp_footer', 'scroll_popup_add_to_posts');
