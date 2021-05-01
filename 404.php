<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package seba
 * 
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php esc_html_e( 'Page Not Found', 'seba' ); ?></h1>

		<div class="intro-text"><p><?php esc_html_e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'seba' ); ?></p></div>

        <?php the_widget( 'WP_Widget_Recent_Posts',array(
            'title' =>esc_html__( 'Take a look  at our  Latest  Posts','seba')
        )
        );?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->



<?php
get_footer();
