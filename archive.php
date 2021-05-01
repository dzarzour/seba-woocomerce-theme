<?php
/**
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seba
 */
get_header();
?>
        <div class="content-area">
            <main>                
                <div class="container">
                <?php the_archive_title('<h1 class="article-title">','</h1>');?>
                        <div class="row">  
                        <?php 
                        //if there any posts
                            if(have_posts()):
                                //load posts
                            while(have_posts()): the_post();
                                ?>
                               <?php get_template_part( 'template-parts/content', 'archive' );?>
                                
                                </div>
                                <?php
                            endwhile;
                            ?>
                            <div class=" container ">
                                <?php
                                the_posts_pagination(  array(
                                    'prev_text'    =>esc_html__('previous','seba'),
                                    'next_text'    =>esc_html__('Next','seba')
                                ));
                            
                            
        
                            else:
                                ?>
                                <p>No post to display</p>
                                <?php
                            endif;
                        ?>
                        </div>
                    </div>
            </main>
        </div>

<?php get_footer();?>
