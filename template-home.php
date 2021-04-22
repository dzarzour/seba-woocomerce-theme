<?php
/**
 * Template Name: Home page
 */

 
get_header();
?>
        <div class="content-area">
            <main>
                <section class="slider">
                  <div class="flexslider">
                    <ul class="slides">
                    <?php  for ($i=1; $i <4 ; $i++):
                      $slider_page[$i]=get_theme_mod('set_slider_page'.$i);
                      $slider_page_button[$i]=get_theme_mod( 'set_slider_button_text'.$i  );
                      $slider_page_url[$i]=get_theme_mod( 'set_slider_URL'.$i );
                    endfor;
                      //loop
                      $args=array(
                        'post_type'         =>'page',
                        'post_per_page='    =>3,
                        'post__in'          =>$slider_page,
                        'orderby'           =>'post__in'
                      );
                      $slider_loop=new WP_Query($args);
                      $j=1;
                      if($slider_loop->have_posts()):
                        while($slider_loop->have_posts()):
                          $slider_loop->the_post();
                          ?>
                           <li>
                              <?php the_post_thumbnail(  'Seba-slider-Size',array('class' =>'img-fluid'));?>
                              <div class="container">
                                    <div class="slider-details-container">
                                      <div class="slider-title">
                                        <h1><?php the_title(); ?></h1>
                                      </div>
                                      <div class="slider-description">
                                        <div class="subtitle"><?php the_content();?></div>
                                        <a href="<?php echo $slider_page_url[$j]?>" class="link"><?php echo $slider_page_button[$j] ?></a>
                                      </div>
                                    </div>
                              </div>
                          </li>
                          <?php
                          $j++;
                        endwhile;
                        wp_reset_postdata();
                      endif;
                    ?>
                    </ul>
                  </div>            
                </section>
                <section class="popular-products">
                    <div class="container">
                        <h2 class="row">popular products</h2>
                        <?php echo  do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' );?>
                    </div>
                </section>
                <section class="new-arrivals">
                <div class="container">
                    <h2 class="row">arrivals products</h2>
                      <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date"]' );?>
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
