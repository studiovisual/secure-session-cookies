<?php
/***************************************************************************
Plugin Name:  Secure Session Cookies
Plugin URI:   https://www.studiovisual.com.br/
Description:  Sets secure, HttpOnly, and SameSite attributes for session cookies to enhance security.
Version:      1.0.0
Author:       Studio Visual
Author URI:   https://www.studiovisual.com.br/
Text Domain:  secure-session-cookies
**************************************************************************/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

require __DIR__ . '/vendor/autoload.php';

// Verifica se a classe App existe antes de prosseguir
if (class_exists('StudioVisual\Cookies\App')) {
    // Define Constants
    define('SECURE_COOKIES_VERSION', '1.0.0');
    define('SECURE_COOKIES_PLUGIN_DIR', plugin_dir_path(__FILE__));
    define('SECURE_COOKIES_PLUGIN_URL', plugin_dir_url(__FILE__));

    // Register Hooks
    register_activation_hook(__FILE__, ['StudioVisual\Cookies\App', 'activate']);
    register_deactivation_hook(__FILE__, ['StudioVisual\Cookies\App', 'deactivate']);

    // Instance
    new StudioVisual\Cookies\App();
}
