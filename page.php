<?php 

get_header();

?>


  <?php 
  
  if ( is_page("about") ) :  ?>

                <div class="about-page-title">
                    <?php //echo $post_object->post_title;
                    the_title();
                    ?>
                </div>


                <div class="about-page-info">

                    <?php the_post_thumbnail('medium'); ?>

                    <div class="about-page-content">
                        <?php the_content(); ?>
                    </div>
        
            </div>

<?php 

endif;

get_footer();

