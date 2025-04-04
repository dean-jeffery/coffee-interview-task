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




function hero_content($hero_customize)
{
    $hero_customize->add_section('hero-header-content', array(
        'title' => 'Hero Content'
    ));

    $hero_customize->add_setting('hero-header-lineone', array(
        'default' => 'Example Headline Text!'
    ));

    $hero_customize->add_control(new WP_Customize_Control($hero_customize, 'hero-lineone-control', array(
        'label' => 'Header line one',
        'section' => 'hero-header-content',
        'settings' => 'hero-header-lineone'
    )));

    $hero_customize->add_setting('hero-header-linetwo', array(
        'default' => 'Example Headline Text!'
    ));

    $hero_customize->add_control(new WP_Customize_Control($hero_customize, 'hero-linetwo-control', array(
        'label' => 'Header line two',
        'section' => 'hero-header-content',
        'settings' => 'hero-header-linetwo'
    )));
}

add_action('customize_register', 'hero_content');
