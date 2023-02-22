<?php 

function krillin_load_scripts()
{
    wp_enqueue_style( 'krillin-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Nunito+Sans&display=swap', array(), null);
    wp_enqueue_script( 'dropdown', get_template_directory_uri().'/assets/js/dropdown.js', array(), true ); 
}

add_action( 'wp_enqueue_scripts', 'krillin_load_scripts');

register_nav_menus(
    array(
        'krillin_main-menu' => 'Main Menu',
        'krillin_footer-menu' => 'Footer Menu',

    )
    );