<?php
/**
 * Plugin Name: Vue Plugin
 * Description: A WordPress plugin using Vue 3 with .vue files.
 * Version: 1.0
 * Author: Your Name
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Enqueue scripts and styles.
function vue_plugin_enqueue_assets() {
    wp_enqueue_script(
        'vue-app',
        plugin_dir_url(__FILE__) . 'dist/assets/main.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'vue_plugin_enqueue_assets');

// Add a shortcode to display the Vue.js app.
function vue_plugin_shortcode() {
    return '<div id="vue-app"></div>';
}
add_shortcode('vue_app', 'vue_plugin_shortcode');
