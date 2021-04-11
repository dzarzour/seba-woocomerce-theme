<?php
/**
 * SEBA theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seba
 * 
 * */

 //enqueue all files css and js
function seba_scripts(){
    wp_enqueue_script( 
        'bootstrap-js', 
        get_template_directory_uri(  ).'/inc/bootstrap.min.js',
         array('jquery'),
         '4.5.1',
         true );
         wp_enqueue_style(
            'bootstrap-css', 
            get_template_directory_uri().'/inc/bootstrap.min.css', 
            array(),  
            '4.3.1',
            'all');     
         
    wp_enqueue_style(
         'seba-style', 
         get_stylesheet_uri(), 
         array(), 
         //filemtime(get_template_directory(  ).'/style.css'), 
         '1.0',
         'all');
}
add_action( 'wp_enqueue_scripts', 'seba_scripts' );

//register nav
function seba_config(){
    register_nav_menus( 
        array(
            'seba_main_menu'           =>'Seba Main Menu',
            'seba_footer_menu'         =>'Seba Footer Menu',


        )
        );

}
add_action( 'after_setup_theme', 'seba_config',0 );