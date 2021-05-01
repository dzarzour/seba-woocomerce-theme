<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seba
 * 
 */

?>
<footer>
            <section class="footer-widgets">
                <div class="container">
                    <div class="row">    
                        <?php 
                        if (is_active_sidebar( 'seba-footer-section-1' )):?>
                            <div class="col-md-4 col-12">
                            <?php  dynamic_sidebar( 'seba-footer-section-1' )?>
                            </div>
                        <?php
                        endif;
                        if (is_active_sidebar( 'seba-footer-section-2' )):?>
                            <div class="col-md-4 col-12">
                            <?php  dynamic_sidebar( 'seba-footer-section-2' )?>
                            </div>
                        <?php
                        endif;
                        if (is_active_sidebar( 'seba-footer-section-3' )):?>
                            <div class="col-md-4 col-12">
                            <?php  dynamic_sidebar( 'seba-footer-section-3' )?>
                            </div>
                        <?php
                        endif;



                        ?>
                    </div>
                </div>    
            </section>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-12 col-md-6 "><?php echo esc_html(get_theme_mod( 'set_copyright', __('copyright by Seba them','seba') )) ?>
                    </div>
                        <div class="footer-menu col-12 col-md-6 text-left text-md-right">
                            <?php wp_nav_menu( 
                                array(
                                    'theme_location'   =>'seba_footer_menu',
                                ) );?>
                        </div>
                    </div>
                </div>    
            
            </section>
        </footer>
    </div>
<?php echo wp_footer(  );?>
</body>

</html>