<?php

function custom_labo_theme(){

    wp_enqueue_script('menu_js', get_template_directory_uri() . '/js/menu.js', false, '', true );
    wp_register_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    

}  

add_action('wp_enqueue_scripts', 'custom_labo_theme');  

//__________________________________________________________________________________________________


function style()
{
    wp_register_style('main', get_template_directory_uri() . '/styles/main.css', 
    array(), false, 'all' );
    wp_enqueue_style('main');
    wp_register_style('magnific', get_template_directory_uri() . '/styles/magnific.css', [], 1, 'all');
    wp_enqueue_style('magnific');
  
}

function montheme_register_assets()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', ['jquery'], 1, true);
    wp_enqueue_script('jquery');

}

function masonery() 
{
    
    wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', ['jquery'], 1, true);
    wp_enqueue_script('magnific');
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], 1, true);
    wp_enqueue_script('custom');

}
function isotope(){
    wp_enqueue_script('jquery_last', get_template_directory_uri() . '/js/jqueryLatest.js', false, '', true );
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.js', false, '', true );
    wp_enqueue_script('imagemin', get_template_directory_uri() . '/js/imageloaded.js', 'jquery', null, true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', false, '', true );


  }
  
add_action('wp_enqueue_scripts', 'isotope');  
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_action('wp_enqueue_scripts', 'style');
add_action( 'wp_enqueue_scripts', 'masonery', 999 );



function loader(){
    wp_register_script('loaderPage', get_template_directory_uri() . '/js/loaderPage.js', ['jquery'], 1, true);
    wp_enqueue_script('loaderPage');
}
add_action('wp_footer', 'loader');



// Intégration du fichier avec les appels add_action().
require_once get_template_directory() . '/inc/actions.php';

// Intégration du fichier avec les appels add_filter().
require_once get_template_directory() . '/inc/filters.php';

// Intégration du fichier avec les fonctions de filtrage.
require_once get_template_directory() . '/inc/filter-functions.php';

// Intégration du fichier avec les fonctions de template.
require_once get_template_directory() . '/inc/template-functions.php';

// Walker Nav Menu.
require_once get_template_directory() . '/classes/class-crd-walker-menu.php';

// Plugin ACF
require_once get_template_directory() . '/inc/plugins/acf.php';





