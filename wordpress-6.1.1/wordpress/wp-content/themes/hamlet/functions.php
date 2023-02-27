<?php

// Adds dynamic page title heading
// Adds custom logo
// Adds thumbnails for posts option

function hamlet_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'hamlet_theme_support');

// Create 2 WP menus

function hamlet_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'hamlet_menus');


// Enqueue styles  

function hamlet_register_styles(){

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('hamlet-style', get_template_directory_uri() . "/style.css", array('hamlet-bootstrap'), $version, 'all');
    wp_enqueue_style('hamlet-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('hamlet-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}
    add_action( 'wp_enqueue_scripts', 'hamlet_register_styles');

// Enqueue scripts 

    function hamlet_register_scripts(){

        wp_enqueue_script('hamlet-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
        wp_enqueue_script('hamlet-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
        wp_enqueue_script('hamlet-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
        wp_enqueue_script('hamlet-main', get_template_directory_uri()."/assets/js/main.js", array(), '3.4.1', true);
    
    }
        add_action( 'wp_enqueue_scripts', 'hamlet_register_scripts');

    // Adds widgets to customize sidebar and footer menus

    function hamlet_widget_areas(){

    // Adds sidebar widget 

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area'
            )
            );
        
        // Adds footer widget    

            register_sidebar(
                array(
                    'before_title' => '',
                    'after_title' => '',
                    'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                    'after_widget' => '</ul>',
                    'name' => 'Footer Area',
                    'id' => 'footer-1',
                    'description' => 'Footer Widget Area'
                )
                );
    }

    add_action('widgets_init', 'hamlet_widget_areas');

?>