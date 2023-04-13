<?php
include_once get_stylesheet_directory() . '/crud/crud-main.php';
function enqueue_styles_child_theme()
{

    $parent_style = 'twentytwentyone-style';
    $child_style = 'twentytwentyone-child-style';

    wp_enqueue_style($parent_style,
        get_template_directory_uri() . '/style.css');

    wp_enqueue_style($child_style,
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'enqueue_styles_child_theme');
