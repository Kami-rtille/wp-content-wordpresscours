<?php
/*
Template Name: Page functions
*/
?>

<?php


function montheme_scripts() {
    /* Chargement fonts */

    /* Chargement feuille de styles */
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/assets/styles/css/main.css', 1.0);

    /* Chargement fichier javascripts */
    wp_deregister_script('jquery'); // deregister le jquery par défaut de wordpress qui est forcé
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', 1.0);
    wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/main.js', 1.0);
}
add_action( 'wp_enqueue_scripts', 'montheme_scripts' );

function monTheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'La Sidebar', 'monTheme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

