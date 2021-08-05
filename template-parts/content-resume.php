<?php 

get_header();

?>

<?php 
  
  if ( is_page("resume") ) :  ?>

    <div class="resume-page">

         <img src ="<?php echo get_the_post_thumbnail_url( 57 , "medium" ); ?>" alt =""> 


        <?php $post_id = 57;
                $post_object  = get_post( $post_id ); 
                echo $post_object->post_title;
                echo $post_object->post_content;
                //  echo $post_object -> post_content;

        ?>
    </div>

<?php 

endif;


get_footer();

