<?php

function arcline_enqueue_styles() {
    wp_enqueue_style('arcline-style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'arcline_enqueue_styles');