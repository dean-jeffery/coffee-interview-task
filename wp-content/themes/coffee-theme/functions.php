<?php

//theme support stuff
function coffee_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');


    // Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));
}
add_action('after_setup_theme', 'coffee_theme_supports');

//load in css
function load_styles()
{
    wp_enqueue_style('coffee-theme-styles', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_styles');
