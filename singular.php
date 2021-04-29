<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Seba
 */

 get_Header();
 ?>
 <div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <?php while(have_posts(  )):
                    the_post();
                    ?>
                    <article <?php post_class();?>>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                                    <div class="post-thumbnail"><?php if(has_post_thumbnail()):
                                    the_post_thumbnail('Seba-blog-Size',array('class' =>'img-fluid'));
                                    endif;
                                     ?></div>
                                     <div class="meta">
                                        <p>Published: by <?php the_author_posts_link();?>  on   <?php echo get_the_date();?>
                                        </br>
                                        <?php if(has_category()):?>Category:<span > <?php the_category(); endif;?></span>
                                        </br>
                                        <?php if(has_tag()):?>Tags:<span> <?php the_tags(); endif;?></span> 
                                        </p>
                                     </div>
                                    <div><?php the_content();?></div>
                                </article>
                                <?php
                                    if(comments_open()||get_comments_number()):
                                        comments_template();
                                    endif;

                endwhile;?>
            </div>
        </div>
    </div>
 </div>