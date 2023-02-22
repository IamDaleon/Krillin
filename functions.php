<?php 

function krillin_load_scripts()
{
    wp_enqueue_style( 'krillin-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Nunito+Sans&display=swap', array(), null);
}

add_action( 'wp_enqueue_scripts', 'krillin_load_scripts');