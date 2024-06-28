<?php


// Register the custom template
function my_custom_template_plugin_register_template( $templates ) {
    $templates['login.php'] = 'Login Template';
    return $templates;
}
add_filter( 'theme_page_templates', 'my_custom_template_plugin_register_template' );

// Load the custom template
function my_custom_template_plugin_load_template( $template ) {
    if ( get_page_template_slug() == 'login.php' ) {
        $template = plugin_dir_path( __FILE__ ) . '/templates/login.php';
    }
    return $template;
}
add_filter( 'template_include', 'my_custom_template_plugin_load_template' );
