<?php
// Append custom files in head
add_action('wp_head', function () {
    include_once PLUGIN_DIR_PATH . '/includes/assets/' . PLUGIN_PREFIX . '_front_header.php';
});

// Append custom files in footer
add_action('wp_footer', function () {
    include_once PLUGIN_DIR_PATH . '/includes/assets/' . PLUGIN_PREFIX . '_front_footer.php';
});

// Register the custom templates
function register_custom_template($templates)
{
    $templates['login.php'] = 'Login Template';
    $templates['signup.php'] = 'SignUp Template';
    return $templates;
}
add_filter('theme_page_templates', 'register_custom_template');

// Load the custom templates
function load_custom_template($template)
{
    if (get_page_template_slug() == 'login.php') {
        $template = plugin_dir_path(__FILE__) . '/templates/' . PLUGIN_PREFIX . '_login.php';
    } else if (get_page_template_slug() == 'signup.php') {
        $template = plugin_dir_path(__FILE__) . '/templates/' . PLUGIN_PREFIX . '_signup.php';
    }
    return $template;
}
add_filter('template_include', 'load_custom_template');
