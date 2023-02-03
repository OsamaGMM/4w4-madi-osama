<?php
function ajouter_styles()
{
    wp_enqueue_style(
        'style-princ',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
    );
}
add_action('wp_enqueue_scripts', 'ajouter_styles');


if (!function_exists('enregistrement_nav_menu')) {

    function enregistrement_nav_menu()
    {
        register_nav_menus(array(
            'principal' => __('Menu Principal'),
            'footer'  => __('Menu Pied De Page'),
        ));
    }
    add_action('after_setup_theme', 'enregistrement_nav_menu', 0);
}
