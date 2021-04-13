<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package seba
 */

?><!DOCTYPE html>
<html lang=<?php language_attributes();?>">

<head>
    <meta charset=<?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div id="page" class="site">
        <header>
            <section class="search">
                <div class="container">
                    <div class="text-center d-md-flex align-items-center">
                         <?php get_search_form();?>
                    </div>
                </div>
            </section>
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                    <div class="brand col-12 col-md-3 col-lg-2 text-center text-md-left">
                        <?php 
                        if(has_custom_logo()):
                            ?>  <a href="<?php home_url('/')?>">
                            <?php
                            the_custom_logo();?></a><?php
                        else:
                            ?>
                            <p class="site-title"><?php bloginfo( 'title' )?></p>
                            <span class="site-description"><?php bloginfo( 'description' )?></span>
                            <?php    
                        endif;
                        ?>
                    </div>
                    <div class="second-column col-12 col-md-9 col-lg-10 ">
                        <div class="row">
                            <div class="account col-12 ">
                                <div class="navbar-expand">
                                    <ul class="navbar-nav float-left">
                                       <?php
                                       if(class_exists('WooCommerce')):
                                            if(is_user_logged_in()):?>
                                                <li><a href="<?php echo esc_url(get_permalink( get_option( 'woocommerce_myaccount_page_id') ));?>" class="nav-link">My account</a></li>
                                                <li><a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id') ) ) )?>" class="nav-link">Logout</a></li>
                                            <?php
                                            else:    
                                                ?>
                                                <li><a href="<?php echo esc_url(get_permalink( get_option( 'woocommerce_myaccount_page_id') ));?>" class="nav-link">Login|Register</a></li>
                                                
                                                <?php
                                                endif;
                                        endif;?>
                                         </ul>
                                </div>
                                <div class="cart text-right">
                                    <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
                                    <span class="items"><?php echo WC()->cart->get_cart_contents_count();?></span>
                                </div>
                            </div>
                                <div class="col-12 ">
                                    <nav class="main-menu navbar navbar-expand-md navbar-light " role="navigation">
                                        <div class="container">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                                <?php
                                                wp_nav_menu( array(
                                                    'theme_location'    => 'seba_main_menu',
                                                    'depth'             => 2,
                                                    'container'         => 'div',
                                                    'container_class'   => 'collapse navbar-collapse',
                                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                                    'menu_class'        => 'nav navbar-nav',
                                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                                ) );
                                                ?>
                                        </div>
                                    </nav>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

            </section>
        </header>

       