<?php
/**
 * The main template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seba
 */
get_header();
?>
        <div class="content-area">
            <main>                
                <div class="container">
                        <div class="row">
                        <?php get_sidebar(); ?>
                        <div class="col-lg-9 col-md-8 col-12">
                            
                            <?php 
                            //if there any posts
                                if(have_posts()):
                                    //load posts
                                   
                                while(have_posts()): the_post();
                                    ?>
                                    <?php
                                     get_template_part( 'template-parts/content' );
                                      
                                    ?>
                                   
                                    <?php
                                endwhile;
                                ?>
                                <div class="vcontainer">
                                    <?php
                                    the_posts_pagination(  array(
                                        'prev_text'    =>__('previous','seba'),
                                        'next_text'    =>__('Next','seba')
                                    ));
                                    
                                else:
                                    ?>
                                    <p>No post to display</p>
                                    <?php
                                endif;
                                
                            ?>
                            </div> 
                           
                        </div>
                    </div>
            </main>
        </div>

<?php get_footer();?>
