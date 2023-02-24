<?php 

//This function enable Bootstrap to the Wordpress theme!
function wpbootstrap_enqueue_styles() {
    wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');
// END

function krillin_load_scripts()
{
    wp_enqueue_style( 'krillin-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Nunito+Sans&display=swap', array(), null);
    wp_enqueue_script( 'dropdown', get_template_directory_uri().'/assets/js/dropdown.js', array(), true ); 
}

add_action( 'wp_enqueue_scripts', 'krillin_load_scripts');



    function krillin_config(){
        register_nav_menus(
            array(
                'krillin_main-menu' => 'Main Menu',
                'krillin_footer-menu' => 'Footer Menu'
                )
        );

        $args = array(
            'height' => 325,
            'width' => 1920
        );
        add_theme_support('custom-header', $args);
    }

    add_action('after_setup_theme', 'krillin_config', 0);

    function simpleScripts() {
        wp_enqueue_script( 'simpleScript', get_stylesheet_directory_uri() . '/assets/js/simple.js', array( 'jquery' ) );
    }

    add_action( 'wp_enqueue_scripts', 'simpleScripts' );
    
    function jquery_loader() {
        // Load FlexSlider JavaScript that handle the SlideShow:
        wp_enqueue_script('jQuery-js', 'http://code.jquery.com/jquery.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'jquery_loader');