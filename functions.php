<?php
function finans_load_scripts()
{
    wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_style('finans-style', get_stylesheet_uri(), array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'finans_load_scripts');

/* -------------- Registrando menus bootstrap com navwalker --------------- */
function register_navwalker(){
    if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
        // File does not exist... return an error.
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // File exists... require it.
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }
}
add_action( 'after_setup_theme', 'register_navwalker' );

function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );

/* ------------- Registrando menus --------------- */
function register_primary_menu(){
    register_nav_menus(
        array(
            'primary' => 'Menu Principal',
        )
    );    
}
add_action('after_setup_theme', 'register_primary_menu');
