<?php
// Charger les styles et scripts
function astra_child_enqueue_assets() {
    // Charger le style du thème parent
    wp_enqueue_style(
        'astra-style',
        get_template_directory_uri() . '/style.css'
    );

    // Charger le style du thème enfant
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        array('astra-style') // dépend du style parent
    );

    // Charger le script pour la modale (dans le thème enfant)
    wp_enqueue_script(
        'modal-scripts',
        get_stylesheet_directory_uri() . '/js/scripts.js',
        array('jquery'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_assets');
