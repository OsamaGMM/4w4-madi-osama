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

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', '4w4' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
    }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );


////    MENUU DEROULANT
     function tutsplus_burger_menu_scripts() {
    
        wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/scripts/burger-menu.js', array( 'jquery' ) );
     
    }
    add_action( 'wp_enqueue_scripts', 'tutsplus_burger_menu_scripts' );