<?php


function enqueue_bootstrap() {
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );


 // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_register_style('style', get_bloginfo( 'style.css' ),'',false,'screen');
    wp_enqueue_style( 'style' );
}
function theme_js(){
 
wp_enqueue_script( 'bootstrap',
get_template_directory_uri() . '/js/bootstrap.js',
array() );
 
wp_enqueue_script( 'jquery-mobile-customized-min',
get_template_directory_uri() . '/js/jquery.mobile.customized.min.js',
array() );
 
}
 
add_action( 'wp_footer', 'theme_js' );
function wbci_enqueue_js_css () {
  global $post;
  $post_bootstrap_include_value = get_post_meta($post->ID, 'wp-bootstrap-include', true);
  if (in_array($post_bootstrap_include_value, array('true', 'on', 'yes')) ) {
    wp_register_style( 'css/bootstrap-css', plugins_url('bootstrap.css', __FILE__) );
    wp_register_style( 'css/bootstrap-responsive-css', plugins_url('bootstrap-responsive.css', __FILE__) );
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('bootstrap-responsive-css');

    wp_enqueue_script('bootstrap-js', plugins_url('js/bootstrap.js', __FILE__), array('jquery'), null, true);
  }
}
add_action('wp_enqueue_scripts', 'wbci_enqueue_js_css');



// Menus de navigation
//register_nav_menus(array(
//    'topmenu' => 'Menu principal (header)'
//));
 //wp_nav_menu(
 //  array( 'theme_location' => 'premier-menu',
   //    'container_class' => 'topmenu'
//) ); 

register_nav_menus( array(
        'Topmenu' => 'Navigation principale',
    ) );

?>




