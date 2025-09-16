<?php
// Theme setup: supports and menus
function katalystpress_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'katalystpress'),
    ]);
}
add_action('after_setup_theme', 'katalystpress_theme_setup');

// Enqueue compiled Tailwind CSS from assets
function katalystpress_enqueue_assets() {
    $css_path = get_template_directory() . '/assets/css/tailwind.css';
    $css_uri  = get_template_directory_uri() . '/assets/css/tailwind.css';
    $version  = file_exists($css_path) ? filemtime($css_path) : null;
    wp_enqueue_style('katalystpress-tailwind', $css_uri, [], $version);

    // Header JS for mobile menu toggle
    $js_path = get_template_directory() . '/assets/js/header.js';
    $js_uri  = get_template_directory_uri() . '/assets/js/header.js';
    if ( file_exists($js_path) ) {
        wp_enqueue_script('katalystpress-header', $js_uri, [], filemtime($js_path), true);
    }
}
add_action('wp_enqueue_scripts', 'katalystpress_enqueue_assets');
