<?php
function ajouter_styles()
{

    wp_enqueue_style(
        'style-principale',  // identificateur du link css
        get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
        array(), // les fichiers css qui dépendent de style.css
        filemtime(get_template_directory() . '/style.css')  // version de notre style.css
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

// Add theme support
add_theme_support('title-tag');
add_theme_support('custom-logo',
    array(
        'height' => '150',
        'width' => '150'
    )
);
add_theme_support('post-thumbnail');
