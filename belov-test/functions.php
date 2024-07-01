<?php

/**
 * belov-test functions and definitions
 * 
 * @link https://github.com/ndegwamoche/belov-test
 *
 * @package belov-test
 */


//Setup theme defaults

function belov_test_setup()
{
    //Enable custom title
    add_theme_support('title-tag');

    //Enable post thumbnails
    add_theme_support('post-thumbnails');

    //Enable page excerpt
    add_post_type_support('page', 'excerpt');

    //Enable custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 60,
            'width'       => 500,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'belov_test_setup');

//Register the menus

function belov_test_register_nav_menus()
{
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'belov-test'),
        )
    );
}

add_action('init', 'belov_test_register_nav_menus');

//Enqueue scripts and styles.

function belov_test_scripts()
{
    //Our Custom style
    wp_enqueue_style('belov-test-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'belov_test_scripts');
