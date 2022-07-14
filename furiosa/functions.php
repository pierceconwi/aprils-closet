<?php 

function pmc_theme_support() {
    // Adds dynamic title tag support - WordPress will manage title tags for each post/page. Delete hardcoded HTML title dags.
    add_theme_support('title-tag');
    // Adds logo option to theme, found under WP Admin -> Customize Appearance -> Site Identity.
    $defaults = array(
        'height' => 100,
        'width' => 200,
        'flex-height' => false,
        'flex-width' => false,
    );
    add_theme_support('custom-logo', $defaults);
    $defaultsheader = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/assets/images/furiosa-default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1920,
        // Header image height (in pixels)
        'height'            => 1080,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
    add_theme_support('custom-header', $defaultsheader);
}



// Run my custom theme support function after theme setup is complete.
add_action('after_setup_theme', 'pmc_theme_support');

function pmc_register_styles(){
    // Declare variable to hold version number to be dyamically pulled from stylesheet.
    $version = wp_get_theme()->get( 'Version' );
    // Designate name, CSS URI, array designating load order dependency, version number, what stylesheet its for.
    wp_enqueue_style('pmc-style', get_template_directory_uri() . '/style.css', array('pmc-bootstrap'), $version, 'all');
    wp_enqueue_style('pmc-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('pmc-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');

}

// When WP runs its own enqueue stylesheets function during page load, run my custom enqueue stylesheets function as well.
add_action( 'wp_enqueue_scripts', 'pmc_register_styles');


function pmc_register_scripts(){

    // Designate name, script URI, empty array, version number, and whether to include this in the footer.
    wp_enqueue_script('pmc-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
    wp_enqueue_script('pmc-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0', true);
    wp_enqueue_script('pmc-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1', true);
    wp_enqueue_script('pmc-customscripts', get_template_directory_uri() . "main.js", array(),'1.0', true);

}

// When WP runs its own enqueue scripts function during page load, run my custom enqueue scripts function as well.
add_action ( 'wp_enqueue_scripts', 'pmc_register_scripts');



function pmc_menus(){

$locations = array(
    'primary' => 'Desktop Primary Left Sidebar',
    'footer' => 'Footer Menu Items'
);
register_nav_menus($locations);

}

// Runs custom menu function when WordPress runs the init function.
add_action('init', 'pmc_menus');


// Add banner image support.


add_action( 'after_setup_theme', 'furiosa_custom_header_setup' );

?> 