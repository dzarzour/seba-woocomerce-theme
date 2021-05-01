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
                                        <a href="<?php echo esc_url( $slider_page_url[$j])?>" class="link"><?php echo esc_html(  $slider_page_button[$j]) ?></a>
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
                <section class="popular-products" >
                    <div class="container" >
                         <?php $popular_products_heading=esc_html( get_theme_mod( __('set_popular_products_heading','seba'), 'Popular Products')); ?>
                        <h2 class="section-title"><?php echo $popular_products_heading; ?></h2>
                        <?php  $max_popular_num= get_theme_mod( 'set_popular_max_num', 4 );
                               $popular_col_num =get_theme_mod( 'set_popular_col_num', 4 );?>
                        <?php echo  do_shortcode( '[products limit="'.esc_attr( $max_popular_num).'" columns="'.esc_attr($popular_col_num).'" orderby="popularity"]' );?>
                    </div>
                </section>
                <section class="new-arrivals" >
                <div class="container">
                <?php $set_new_arrival_products_heading=esc_html(get_theme_mod( __('set_new_arrival_products_heading','seba'), 'New Arrival  Products')); ?>  
                    <h2 class="section-title"><?php echo $set_new_arrival_products_heading; ?></h2>
                      <?php  $set_arrival_max_num=esc_html(get_theme_mod( 'set_arrival_max_num', 4 ));
                             $set_arrival_col_num=esc_html(get_theme_mod( 'set_arrival_col_num', 4));
                      ?>
                      <?php echo do_shortcode( '[products limit="'.esc_attr($set_arrival_max_num).'" columns="'.esc_attr($set_arrival_col_num).'" orderby="date"]' );?>
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
                      <h2 class="section-title"> <?php esc_html__( 'Deal of the week', 'seba' )?></h2>
                        <div class=" d-flex align-items-center"> 
                          <div class="deal-img col-md-6 col-12 ml-auto text-center">
                          <?php echo get_the_post_thumbnail( $deal, 'large', array('class' =>'img-fluid') );?>
                          </div>
                          <div class=" deal-desc col-md-4 col-12 mr-auto text-center">
                            <?php if (!empty($sale)):?>
                            <span class="discount">
                              <?php echo $discount_precentage.'% ' .esc_html__( 'OFF', 'seba' )?>
                            </span>  
                            <?php endif; ?>
                            <h3>
                              <a href="<?php echo  esc_url( get_permalink( $deal )); ?>"><?php echo esc_html( get_the_title( $deal ));?></a>
                              <p><?php echo esc_html( get_the_excerpt( $deal ))?></p>
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
                <?php $set_blog_heading=get_theme_mod( 'set_blog_heading', 'BLOG NEWS'); ?> 
                  
                    <?php $args=array(
                      'post_type'    =>'post',
                      'posts_per_page'=>2
                    );
                    
                    $blog_posts=new WP_Query($args);
                    ?>  
                <div class="container">
                <h3 class="set_blog_heading"><?php echo $set_blog_heading; ?></h3> 
                    <div class="row">                      
                        <?php 
                        //if there any posts
                            if($blog_posts->have_posts()):
                                //load posts
                            while($blog_posts->have_posts()): $blog_posts->the_post();
                                ?>
                                <article class="col-12 col-md-6">
                                
                                    <?php if(has_post_thumbnail( )):
                                    the_post_thumbnail( 'Seba-blog-Size', array('class'=>'img-fluid') );
                                    endif;?>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <div><?php the_excerpt();?></div>
                                </article>
                                <?php
                            endwhile;
                            
                            else:
                                ?>
                                <p>No Blog to display</p>
                                <?php
                            endif;
                        
                        ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>

<?php get_footer();?>
