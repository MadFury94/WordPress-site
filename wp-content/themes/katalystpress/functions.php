<?php
// Enqueue the main compiled Tailwind CSS
function cg_your_theme_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'cg_your_theme_scripts' );
