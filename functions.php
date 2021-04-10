<?php
/**
 * SEBA theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seba
 * 
 * */
function seba_scripts(){
    wp_enqueue_style(
         'seba-style', 
         get_stylesheet_uri(), 
         array(), 
         //filemtime(get_template_directory(  ).'/style.css'), 
         '1.0',
         'all');
}
add_action( 'wp_enqueue_scripts', 'seba_scripts' );
