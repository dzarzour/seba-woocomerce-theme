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
                <?php if(class_exists('WooCommerce')):?>
                <section class="popular-products">
                    <div class="container">
                         <?php $popular_products_heading=get_theme_mod( 'set_popular_products_heading', 'Popular Products'); ?>
                        <h2 class="row"><?php echo $popular_products_heading; ?></h2>
                        <?php  $max_popular_num= get_theme_mod( 'set_popular_max_num', 4 );
                               $popular_col_num =get_theme_mod( 'set_popular_col_num', 4 );?>
                        <?php echo  do_shortcode( '[products limit="'.$max_popular_num.'" columns="'.$popular_col_num.'" orderby="popularity"]' );?>
                    </div>
                </section>
                <section class="new-arrivals">
                <div class="container">
                <?php $set_new_arrival_products_heading=get_theme_mod( 'set_new_arrival_products_heading', 'New Arrival  Products'); ?>  
                    <h2 class="row"><?php echo $set_new_arrival_products_heading; ?></h2>
                      <?php  $set_arrival_max_num=get_theme_mod( 'set_arrival_max_num', 4 );
                             $set_arrival_col_num=get_theme_mod( 'set_arrival_col_num', 4);
                      ?>
                      <?php echo do_shortcode( '[products limit="'.$set_arrival_max_num.'" columns="'.$set_arrival_col_num.'" orderby="date"]' );?>
                    </div>
                </section>
                <?php
                $show_deal=get_theme_mod( 'set_deal_show',0 );
                $deal     =get_theme_mod( 'set_deal');
                $currency =get_woocommerce_currency_symbol();
                $regular  =get_post_meta( $deal, '_regular_price',true );
                $sale     =get_post_meta( $deal, '_sale_price', true );
                if($show_deal==1 && (!empty($deal))):
                  $discount_precentage=absint(100-(($sale/$regular)*100));
                ?>
                <section class="deal-of-the-week">
                    <div class="container">
                      <h2>Deal of the week</h2>
                        <div class="row d-flex align-items-center"> 
                          <div class="deal-img col-md-6 col-12 ml-auto text-center">
                          <?php echo get_the_post_thumbnail( $deal, 'large', array('class' =>'img-fluid') );?>
                          </div>
                          <div class=" deal-desc col-md-4 col-12 mr-auto text-center">
                            <?php if (!empty($sale)):?>
                            <span class="discount">
                              <?php echo $discount_precentage.'% OFF'?>
                            </span>  
                            <?php endif; ?>
                            <h3>
                              <a href="<?php echo get_permalink( $deal ) ?>"><?php echo get_the_title( $deal );?></a>
                              <p><?php echo get_the_excerpt( $deal )?></p>
                            </h3>
                            <div class="price">
                              <span class="regular">
                                <?php echo $currency;
                                      echo $regular?>
                              </span>
                              <?php if(!empty($sale)):?>
                                <span class="sale">
                                  <?php echo $currency;
                                        echo $sale?>
                                </span>  
                              <?php endif?>
                            </div>
                            <a href="<?php echo esc_url( '?add-to-cart='.$deal ); ?>">Add to Cart</a>
                            

                          </div>
                        </div>
                    </div>
                </section>
                <?php endif;?>
                <?php endif; //woocomerce class excisit?>
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
