<?php

//REGISTRO DE CSS
function theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', '', false, 'screen');

    /*wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js', '', false, 'screen');*/

    wp_enqueue_style('bootstrap_5', get_stylesheet_directory_uri() . '/assets/css/bootstrap-grid.min.css', '', false, 'screen');

    wp_enqueue_style('slick_theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', '', false, 'screen');

    wp_enqueue_style('uc', get_stylesheet_directory_uri() . '/assets/css/estilo-estilo.css', '', false, 'screen');

    wp_register_script('slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script('slick-js');


    /*wp_enqueue_style('slick-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css');*/
}
add_action('wp_enqueue_scripts', 'theme_assets');


function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}
add_action('init', 'wpb_custom_new_menu');

// remove wp version number from scripts and styles
function remove_css_js_version($src)
{
    if (strpos($src, '?ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}
add_filter('style_loader_src', 'remove_css_js_version', 9999);
add_filter('script_loader_src', 'remove_css_js_version', 9999);
