<?php


function crdtheme_setup() {

 
  load_theme_textdomain( 'crdtheme', get_template_directory() . '/languages' );
  

  // permet aux plugins et aux thèmes de gérer la balise de titre du document.
  add_theme_support( 'title-tag' );

  // permet la prise en charge des images mises en avant.
  add_theme_support( 'post-thumbnails' );

  // permet de rendre le code valide pour HTML5.
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  /**
   * permet la prise en charge d'un logo personnalisé.
   */
  add_theme_support( 'custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
  ) );

  // Désactive les tailles de police et couleurs pour Gutenberg
  add_theme_support( 'disable-custom-font-sizes' );
  add_theme_support( 'disable-custom-colors' );
  add_theme_support( 'editor-color-palette' );

  /**
   * Enregistre la prise en charge de certaines fonctionnalités pour un type de publication.
   */
  // permet la prise en charge des extraits.
  add_post_type_support( 'page', 'excerpt' );

  /**
   * La fonction add_image_size peprmet de définir de nouvelles tailles d'image
   */
  add_image_size( 'square', 1024, 1024, true);
  add_image_size( 'paysage', 1024, 680, true);

}


function crdtheme_scripts_styles() {

	wp_enqueue_style( 'crd-style', get_template_directory_uri() . '/styles/main.css' );
	wp_register_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyChc9PPkTuh3w_BmUT4RgWYMZUK194x5P4' , '', null , true );
	wp_register_script( 'gmap', get_template_directory_uri() . '/dist/js/gmap.js' , '', null, true );
	wp_localize_script( 'gmap', 'themeUri', get_template_directory_uri() );
	if (is_singular( 'site' ) || is_post_type_archive( 'site' ) || is_page( 'Contact' )) {
		wp_enqueue_script( 'googlemap' );
		wp_enqueue_script( 'gmap' );
	}

}

/**
 * Enregistre les emplacements du menu de navigation pour un thème.
 */
function crdtheme_register_menus() {
  register_nav_menus( array(
    'main-menu' => esc_html__( 'En-tête de page', 'crdtheme' ),
    'footer-menu' => esc_html__( 'Pied de page', 'crdtheme' )
  ) );
}


function crdtheme_custom_query_vars( $query ) {
  if ( $query->is_main_query() ) {
    if ( is_post_type_archive( 'event' ) || is_tax( 'location' ) || is_tax( 'cat_event' ) ) {
      $today = date('Y-m-d H:i:s');
      $query->set( 'posts_per_page', 6 );
      $query->set( 'meta_key', 'date' );
      $query->set( 'orderby', 'meta_value' );
      $query->set( 'order', 'ASC' );
      $query->set( 'meta_query', array(
        array(
          'key' => 'date',
          'value' => $today,
          'compare' => '>='
        )
      ));
    }
  }
  return $query;
}
