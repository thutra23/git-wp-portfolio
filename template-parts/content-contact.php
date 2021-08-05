<?php 

get_header();

?>


  <?php 
  
  if ( is_page("contact") ) :  ?>

    <div class="contact-page">

         <img src ="<?php echo get_the_post_thumbnail_url( 99 , "medium" ); ?>" alt =""> 


        <?php $post_id = 99;
                $post_object  = get_post( $post_id ); 
                echo $post_object->post_title;
                echo $post_object->post_content;
                //  echo $post_object -> post_content;

        ?>
    </div>

<?php 

endif;


get_footer();

