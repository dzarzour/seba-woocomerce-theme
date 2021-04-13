<?php 
/**
* The searchform.php template.
*
* Used any time that get_search_form() is called.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package seba
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'seba' );?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'seba' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '', 'submit button', 'seba' ); ?>" /><?php
    if(class_exists('WooCommerce')){?>
        <input type="hidden" value="product" name="post_type" class="post_type">
  <?php  }?>
   
</form>
