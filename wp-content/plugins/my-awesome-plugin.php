<?php
/**
 * Plugin Name: My Awesome Plugin
 * Description: A simple plugin that adds a button to the page.
 * Version: 1.0
 * Author: Your Name
 */

 function my_awesome_plugin_enqueue_scripts() {
    wp_enqueue_script(
        'my-awesome-plugin-script',
        plugin_dir_url(__FILE__) . 'js/index.js', // بررسی کنید که این مسیر صحیح است
        array(), // وابستگی‌ها
        null, // شماره نسخه
        true // بارگذاری در انتهای body
    );
}
add_action('wp_enqueue_scripts', 'my_awesome_plugin_enqueue_scripts');
