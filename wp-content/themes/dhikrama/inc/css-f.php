<?php

function get_style_css()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_dequeue_style('wpsl-styles');
    wp_dequeue_style('wp-block-library');
}

add_action("wp_enqueue_scripts", 'get_style_css');
