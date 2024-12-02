<?php
/**
 * Fonction pour charger les styles du thème parent et du thème enfant.
 */
function oceanwp_enfant_enqueue_styles() {
    // Charger le style du parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Charger le style du thème enfant (si vous en ajoutez plus tard)
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

// Ajouter la fonction à l'aide de l'action 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'oceanwp_enfant_enqueue_styles');

/**
 * Fonction pour ajouter un lien "Admin" dans le menu si l'utilisateur est connecté.
 *
 * @param string $items Les éléments HTML du menu.
 * @param object $args  Les arguments du menu.
 * @return string        Les éléments du menu avec le lien "Admin" ajouté.
 */
function ajouter_lien_admin($items, $args) {
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajouter un élément de menu pour accéder au tableau de bord d'administration
        $items .= '<li class="menu-item"><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
    }

    return $items;
}

// Ajouter la fonction à l'aide du filtre 'wp_nav_menu_items'
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);



