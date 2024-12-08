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






function ajouter_lien_admin($items, $args) {
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajouter un lien "Admin" à la fin du menu
        $items .= '<li class="menu-item menu-item-admin"><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);



