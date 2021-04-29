<?php 
/**
 * @package seba
 */



 if(is_active_sidebar( 'seba-sidebar' )){
     ?>
      <aside class="col-lg-3 col-md-4 col-12 ">
        <?php dynamic_sidebar( 'seba-sidebar' );?>

      </aside>
     
     <?php
    
 }
?>
