<?php

function arcline_enqueue_styles() {
    wp_enqueue_style('arcline-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
}

add_action('wp_enqueue_scripts', 'arcline_enqueue_styles');