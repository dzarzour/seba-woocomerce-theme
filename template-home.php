<?php
/**
 * Template Name: Home page
 */

 
get_header();
?>
        <div class="content-area">
            <main>
                <section class="slider">
                    <div class="container">
                        <div class="row">
                        slider
                        </div>
                    </div>
                </section>
                <section class="popular-products">
                <div class="container">
                        <div class="row">
                        popular products
                        </div>
                    </div>
                </section>
                <section class="new-arrivals">
                <div class="container">
                        <div class="row">
                        New arrivals
                        </div>
                    </div>
                </section>
                <section class="deal-of-the-week">
                <div class="container">
                        <div class="row">
                        Deal of the week
                        </div>
                    </div>
                </section>
                <section class="news">
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
                </section>
            </main>
        </div>

<?php get_footer();?>
