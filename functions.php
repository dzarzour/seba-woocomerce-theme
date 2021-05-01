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

 //require customizer file
 require_once get_template_directory().'/inc/customizer.php';
 //enqueue all files css and js
function seba_scripts(){
    //css ,js bootstrap
         wp_enqueue_script( 'bootstrap-js',get_template_directory_uri(  ).'/inc/bootstrap.min.js',array('jquery'),'4.5.1',true );
         wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/inc/bootstrap.min.css', array(), '4.3.1','all');     

        //google fonts
        wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap|https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap' ) ;     
        //style.css main style  theme    
        wp_enqueue_style(
         'seba-style',  get_stylesheet_uri(), array(),  //filemtime(get_template_directory(  ).'/style.css'), 
          '1.0', 'all');

         //flex slider files
         wp_enqueue_script( 'flex-slider-min-js',get_template_directory_uri(  ).'/inc/flexslider/jquery.flexslider-min.js', array('jquery'),'', true );
         wp_enqueue_style( 'flex-slider-css', get_template_directory_uri(  ).'/inc/flexslider/flexslider.css', array(), '1.1', 'all' );
         wp_enqueue_script( 'flex-slider-js',get_template_directory_uri(  ).'/inc/flexslider/flex-slider.js', array('jquery'),'', true );
         
}
add_action( 'wp_enqueue_scripts', 'seba_scripts' );

//register nav
function seba_config(){
    register_nav_menus( 
        array(
            'seba_main_menu'           => esc_html__( 'Seba Main Menu', 'seba' ),
            'seba_footer_menu'         =>esc_html__('Seba Footer Menu', 'seba' ),
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
        //woocomerce gallary support
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        //custom logo
        add_theme_support( 'custom-logo',array(
            'width'         =>160,
            'height'        =>85,
            'flex-width'    =>true,
            'flex-height'   =>true
            
        ));
        if(!isset($content_width)){
            $content_width=600;
        }
        add_theme_support('post-thumbnails');
        add_theme_support( 'title-tag' );
        //custom size for flex slider images
        add_image_size( 'Seba-slider-Size', '1920', '400', array('center','center') );
        add_image_size( 'Seba-blog-Size', '960', '640', array('center','center') );
        $text_domain='seba';
        load_theme_textdomain( $text_domain,  get_stylesheet_directory().'/languages/');
        load_theme_textdomain( $text_domain,  get_template_directory().'/languages/');
}
add_action( 'after_setup_theme', 'seba_config',0 );

//require wc modification file
if(class_exists('WooCommerce')){
    require get_template_directory().'/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'seba_woocommerce_header_add_to_cart_fragment' );

function seba_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	 <span class="items"><?php echo WC()->cart->get_cart_contents_count();?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action( 'widgets_init','seba_sidebar' );
function seba_sidebar(){
    register_sidebar( array(
        'name'          =>esc_html__( 'Seba Sidebar', 'seba' ),
        'id'            =>'seba-sidebar',
        'description'   =>esc_html__( 'Drag and drop your widget here', 'seba' ),
        'before_widget' =>'<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  =>'</div>',
        'before-title'  =>'<h4 class="widget-title>',
        'after-title'  =>'</h4'
    ));
    register_sidebar( array(
        'name'          =>esc_html__( 'Seba Sidebar shop', 'seba' ),
        'id'            =>'seba-sidebar-shop',
        'description'   =>esc_html__( 'Drag and drop your widget  for shop page ', 'seba' ),
        'before_widget' =>'<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  =>'</div>',
        'before-title'  =>'<h4 class="widget-title>',
        'after-title'  =>'</h4'
    ));
    register_sidebar( array(
        'name'          =>esc_html__( 'Seba footer section 1', 'seba' ),
        'id'            =>'seba-footer-section-1',
        'description'   =>esc_html__( 'Drag and drop your widget  for footer 1 ', 'seba' ),
        'before_widget' =>'<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  =>'</div>',
        'before-title'  =>'<h4 class="widget-title>',
        'after-title'  =>'</h4'
    ));
    register_sidebar( array(
        'name'          =>esc_html__( 'Seba footer section 2', 'seba' ),
        'id'            =>'seba-footer-section-2',
        'description'   =>esc_html__('Drag and drop your widget  for footer 2 ', 'seba' ),
        'before_widget' =>'<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  =>'</div>',
        'before-title'  =>'<h4 class="widget-title>',
        'after-title'  =>'</h4'
    ));
    register_sidebar( array(
        'name'          =>esc_html__( 'Seba footer section 3', 'seba' ),
        'id'            =>'seba-footer-section-3',
        'description'   =>esc_html__( 'Drag and drop your widget  for footer 3 ', 'seba' ),
        'before_widget' =>'<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widget'  =>'</div>',
        'before-title'  =>'<h4 class="widget-title>',
        'after-title'  =>'</h4'
    ));
}