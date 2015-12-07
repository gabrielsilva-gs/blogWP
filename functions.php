<?php
/**
 * Funções e definições do BielWP
 *
 * @package BielWP
 * @since BielWP 2.0
 */

/* ESTILOS E SCRIPTS */

function bwp_theme_styles() {

    wp_enqueue_style( 'styles_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fonts_css', 'http://fonts.googleapis.com/css?family=Roboto:300italic,900,400italic,400,300,500italic,700italic,700,500,900italic' );

}
add_action( 'wp_enqueue_scripts', 'bwp_theme_styles' );

function bwp_theme_js() {

    //wp_enqueue_script( '', get_template_directory_uri() . 'path', array('jquery'), '', false );

}
add_action( 'wp_enqueue_scripts', 'bwp_theme_js' );


/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
?>