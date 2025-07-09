<?php
// Enqueue the main compiled Tailwind CSS
function katalystpress_enqueue_styles() {
    wp_enqueue_style('tailwind', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'katalystpress_enqueue_styles');
