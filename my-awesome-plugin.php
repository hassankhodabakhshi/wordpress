<?php
/**
 * Plugin Name: My Awesome Plugin
 * Description: A simple plugin that adds a button to the page.
 * Version: 1.0
 * Author: Your Name
 */

// بارگذاری اسکریپت
function my_awesome_plugin_enqueue_scripts() {
    wp_enqueue_script('my-awesome-plugin-script', plugin_dir_url(__FILE__) . 'js/index.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_awesome_plugin_enqueue_scripts');
