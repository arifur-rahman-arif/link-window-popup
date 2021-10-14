<?php

/**
 * Plugin Name:       Link Window Popup
 * Plugin URI:        https://www.linkedin.com/in/arifur-rahman-arif-51222a1b8/
 * Description:       Client Plugin
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      5.4
 * Author:            Arifur Rahman Arif
 * Author URI:        https://www.linkedin.com/in/arifur-rahman-arif-51222a1b8/
 * Text Domain:       link-window-maker
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/* if accessed directly exit from plugin */
defined('ABSPATH') || wp_die(__('You can\'t access this page', 'link-window-maker'));

if (!defined('LINK_WINDOW_VERSION')) {
    define('LINK_WINDOW_VERSION', '1.0.0');
}

if (!defined('LINK_WINDOW_PATH')) {
    define('LINK_WINDOW_PATH', plugin_dir_path(__FILE__));
}

if (!defined('LINK_WINDOW_URL')) {
    define('LINK_WINDOW_URL', plugin_dir_url(__FILE__));
}

if (!defined('PlUGIN_NAME')) {
    define('PlUGIN_NAME', 'Link Window Popup');
}

add_action('wp_enqueue_scripts', 'loadFrontendFiles', 999);

function loadFrontendFiles() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('link-window-popup', LINK_WINDOW_URL . 'frontend.js', ['jquery'], LINK_WINDOW_VERSION, true);
}