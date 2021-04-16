<?php
/**
 * Template Name: Home page
 */

 
get_header();
?>
        <div class="content-area">
            <main>
                <section class="slider">
                    <!-- Place somewhere in the <body> of your page -->
                  <div class="dflexslider">
                    <ul class="slides">
                    <?php  for ($i=1; $i <4 ; $i++):
                      $slider_page[$i]=get_theme_mod('set_slider_page'.$i);
                      $slider_page_button[$i]=get_theme_mod( 'set_slider_button_text'.$i  );
                      $slider_page_url[$i]=get_theme_mod( 'set_slider_URL'.$i );
                    endfor;
                      echo "<pre>";
                      var_dump($slider_page);
                      echo "</pre>";
                     echo"66666666666666666666666666666666666666666666666666";
                      //loop
                      $args=array(
                        'post_type'         =>'page',
                        'post_per_page='    =>3,
                        'post__in'          =>$slider_page,
                        'orderby'           =>'post__in'
                      );
                      $slider_loop=new WP_Query($args);
                      if(have_posts()):
                        while(have_posts()):
                          the_post();
                          ?>
                           <li>
                              <?php the_post_thumbnail(  'Seba-slider-Size',array('class' =>'img-fluid'));?>
                          </li>
                          <?php
                          echo "<pre>";
                         var_dump($slider_loop);
                         echo "</pre>";
                        endwhile;
                      
                        wp_reset_postdata();
                      endif;
                    ?>
                    </ul>
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
