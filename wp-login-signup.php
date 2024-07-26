<?php

/**
 * Plugin Name: WP Login SignUp
 * Plugin URI: https://github.com/MuhammadSaudFarooq/wp-login-signup
 * Description: WordPress Custom Login/SignUp with Dashboard
 * Author: Muhammad Saud Farooque
 * Author URI: https://github.com/MuhammadSaudFarooq
 * Version: 1.0.0
 * License: MIT
 **/

if (!defined('ABSPATH')) {
    exit;
}

define("PLUGIN_PREFIX", "wpls");
define("PLUGIN_DIR_URL", plugin_dir_url(__FILE__));
define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("AJAX_URL", admin_url('admin-ajax.php'));
define("SITE_URL", site_url());

require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'wpls_integration.php';
