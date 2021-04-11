<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seba
 */

get_header();
?>
        <div class="content-area">
            <main>
                <div class="container">
                    <div class="row">
                    
                    <?php 
                    //if there any posts
                        if(have_posts()):
                            //load posts
                        while(have_posts()): the_post();
                            ?>
                            <article>
                                <h2><?php the_title();?></h2>
                                <div><?php the_content();?></div>
                            </article>
                            <?php
                        endwhile;
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
