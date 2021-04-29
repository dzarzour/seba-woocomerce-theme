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
                        <div class="row">  
                        <h1>Search result for : <?php echo get_search_query( );?></h1>
                        <?php  get_search_form();?>
                        <?php 
                        //if there any posts
                            if(have_posts()):
                                //load posts
                            while(have_posts()): the_post();
                                ?>
                              <?php get_template_part( 'template-parts/content', 'search' ) ?>
                                
                                </div>
                                <?php
                            endwhile;
                            ?>
                            <div class=" container ">
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
            </main>
        </div>

<?php get_footer();?>
