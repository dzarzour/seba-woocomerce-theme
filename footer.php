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
                        footer widgets
                    </div>
                </div>    
            </section>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-12 col-md-6 "><?php echo get_theme_mod( 'set_copyright', 'copyright by Seba them' ) ?>
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