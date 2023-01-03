<?php

function emthe_theme_support()
{

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'emthe_theme_support');


function emthe_menus()
{

    $locations = array(
        'primary'   =>  'Primary left sidebar menu',
        'footer'    =>  'Footer menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'emthe_menus');

function emthe_register_styles()
{

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('emthe-css', get_template_directory_uri() . '/style.css', array('emthe-bootstrap'), $version, 'all');
    wp_enqueue_style('emthe-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('emthe-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'emthe_register_styles');



function emthe_register_scripts()
{


    wp_enqueue_script('emthe-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', 'all', 'true');
    wp_enqueue_script('emthe-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4.1', 'all', 'true');
    wp_enqueue_script('emthe-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', 'all', 'true');
    wp_enqueue_script('emthe-mainjs', get_template_directory_uri() . '/assests/js/main.js', array(), '3.4.1', 'all', 'true');
}

add_action('wp_enqueue_scripts', 'emthe_register_scripts');

function emthe_register_widgets()
{
    register_sidebar(array(
        'name' => 'Widget Sidebar',
        'id' => 'widget-1',
        'class' => 'emthe-sidebar-widget',
        'description' => 'sidebar widget area',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Widget Footer',
        'id' => 'widget-2',
        'class' => 'emthe-footer-widget',
        'description' => 'footer widget area',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget' => '',
    ));
};

add_action('widgets_init', 'emthe_register_widgets');
