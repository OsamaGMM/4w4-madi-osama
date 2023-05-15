<?php
function ajouter_styles()
{

    wp_enqueue_style(
        'style-principale',  // identificateur du link css
        get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
        array(), // les fichiers css qui dépendent de style.css
        filemtime(get_template_directory() . '/style.css')  // version de notre style.css
    );
    wp_enqueue_style("google_font",
                "https://fonts.google.com/share?selection.family=Poppins:wght@100;400",
                false);   
}
add_action('wp_enqueue_scripts', 'ajouter_styles');




/* ----------------------------------- Enregistrement des menus */
if (!function_exists('enregistrement_nav_menu')) {

    function enregistrement_nav_menu()
    {
        register_nav_menus(array(
            'principal' => __('Menu Principal'),
            'menu_sidebar'  => 'Menu sidebar',
            'footer'  => __('Menu Pied De Page'),
        ));
    }
    add_action('after_setup_theme', 'enregistrement_nav_menu', 0);
}

/* -------------------------------------- add_theme_suport */

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );
add_theme_support('custom-background');

// 'default-color' => '0000ff',
// 'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
// );
// add_theme_support( 'custom-background', $args );


/* ----------------------------------- Modification des choix de menu « cours » */
function personnalisation_menu_item_title($title, $item, $args)
{
    // Remplacer 'cours' par l'identifiant de votre menu
    if ($args->menu == 'cours') {
        // Modifier la longueur du titre en fonction de vos besoins
        $title = wp_trim_words($title, 3, ' ... '); // on garde uniquement trois mots pour le titre du choix
    }
    return $title;
}
add_filter('nav_menu_item_title', 'personnalisation_menu_item_title', 10, 3);


// Add theme support
add_theme_support('title-tag');
add_theme_support(
    'custom-logo',
    array(
        'height' => '150',
        'width' => '150'
    )
);
add_theme_support('post-thumbnail');
add_theme_support('custom-background');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', '4w4');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'cidweb_modifie_requete_principal');

function perso_menu_item_title($title, $item, $args) {
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if($args->menu == 'cours') { // on filtre uniquement le menu «cours»
    // Modifier la longueur du titre en fonction de nos besoins
    $sigle = substr($title,4,3);
    $title = substr($title, 7);
    $title = "<code>" .$sigle . "</code>" ." ".wp_trim_words($title, 1, "") ;
    }
    if($args->menu == 'note-4w4') { // on filtre uniquement le menu note-4w4
        // Modifier la longueur du titre en fonction de nos besoins
        $sigle = substr($title,0,2);
        $title = substr($title, 3);
        $title = "<code>" .$sigle . "</code>" ." ".wp_trim_words($title, 1, "") ;
        }
    return $title;
    }
    add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);  

    function enregistrer_sidebar() {
        register_sidebar( array(
            'name' => __( 'Footer 1', '4w4-osama-madi' ),
            'id' => 'footer_1',
            'description' => __( 'Une zone  afficher des widgets dans le footer.', '4w4-eddy-martin' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    
        register_sidebar( array(
            'name' => __( 'Footer 2', '4w4-osama-madi' ),
            'id' => 'footer_2',
            'description' => __( 'Une zone  afficher des widgets dans le footer.', '4w4-eddy-martin' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    
    }
    add_action( 'widgets_init', 'enregistrer_sidebar' );