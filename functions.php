<?php
/**
 * SEBA theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seba
 * 
 * */

 //require bootstrap walker
 require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
 //enqueue all files css and js
function seba_scripts(){
    //css ,js bootstrap
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

      //google fonts
      wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap|https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap' ) ;     
     //style.css main style  theme    
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

        add_theme_support( 'woocommerce' ,array(
          'thumbnail_image_width' =>255,
           'single_image_width'    =>255,
           'product_grid'          =>array(
                'defualt_rows'   =>10,
                'min_rows'       =>5,
                'max_rows'       =>10,
                'defualt_columns'=>1,
                'max_columns'    =>1,
                'min_columns'    =>1
            )
     ));
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        if(!isset($content_width)){
            $content_width=600;
        }
}
add_action( 'after_setup_theme', 'seba_config',0 );

//require wc modification file
if(class_exists('WooCommerce')){
    require get_template_directory().'/inc/wc-modifications.php';
}

