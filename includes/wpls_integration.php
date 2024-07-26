<?php

// Register the Custom Template
function register_custom_template($templates)
{
    $templates['login.php'] = 'Login Template';
    $templates['signup.php'] = 'SignUp Template';
    return $templates;
}
add_filter('theme_page_templates', 'register_custom_template');

// Load the Custom Template
function load_custom_template($template)
{
    if (get_page_template_slug() == 'login.php') {
        $template = plugin_dir_path(__FILE__) . '/templates/login.php';
    } else if (get_page_template_slug() == 'signup.php') {
        $template = plugin_dir_path(__FILE__) . '/templates/signup.php';
    }
    return $template;
}
add_filter('template_include', 'load_custom_template');
