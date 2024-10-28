<?php
function my_bootstrap_theme_scripts() {
    // بارگذاری فایل CSS Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    
    // بارگذاری فایل JavaScript jQuery
    wp_enqueue_script('jquery');

    // بارگذاری فایل JavaScript Bootstrap
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
    
    // بارگذاری فایل CSS قالب
    wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_bootstrap_theme_scripts');
?>
