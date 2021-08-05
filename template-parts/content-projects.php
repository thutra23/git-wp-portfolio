<?php

get_header(); 

?>

  <?php 
  
  if ( is_page("projects") ) :  ?>

 
        <?php $post_id = 63; 
                $post_object  = get_post( $post_id ); ?>
                <?php echo $post_object->post_title; ?> 


<div class="projects-page">

    <div class="projects project-1">


        <img src ="<?php echo get_the_post_thumbnail_url( 73, "medium" ); ?>" alt =""> 

        <?php $post_id = 73;
                $post_object  = get_post( $post_id );  ?>


                <div class="projects-title">
                    <?php echo $post_object->post_title; ?> 
                </div>

                <div class="projects-content">
                    <?php  echo $post_object->post_content; ?>
                </div>
               

        
    </div>

    <div class="projects project-2">

        <img src ="<?php echo get_the_post_thumbnail_url( 76, "medium" ); ?>" alt =""> 

        <?php $post_id = 76;
                $post_object  = get_post( $post_id ); ?>

                <div class="projects-title">
                <?php echo $post_object->post_title; ?> 
            </div>

            <div class="projects-content">
                <?php  echo $post_object->post_content; ?>
            </div>


    </div>

    <div class="projects project-3">

        <img src ="<?php echo get_the_post_thumbnail_url( 79, "medium" ); ?>" alt =""> 

        <div class="project-content">
        <?php $post_id = 79;
                $post_object  = get_post( $post_id ); ?>  

                <div class="projects-title">
                    <?php echo $post_object->post_title; ?> 
                </div>

                <div class="projects-content">
                    <?php  echo $post_object->post_content; ?>
                </div>

        
        </div>
    </div>

    <div class="projects project-4">

        <img src ="<?php echo get_the_post_thumbnail_url( 82, "medium" ); ?>" alt =""> 


        <div class="project-content">
        <?php $post_id = 82;
                $post_object  = get_post( $post_id );  ?>

                <div class="projects-title">
                    <?php echo $post_object->post_title; ?> 
                </div>

                <div class="projects-content">
                    <?php  echo $post_object->post_content; ?>
                </div>
                

        
        </div>
    </div>

    <div class="projects project-5">

        <img src ="<?php echo get_the_post_thumbnail_url( 85, "medium" ); ?>" alt =""> 

        <div class="project-content">

        <?php $post_id = 85;
        $post_object  = get_post( $post_id );  ?>
        <div class="projects-title">
            <?php echo $post_object->post_title; ?> 
        </div>

        <div class="projects-content">
                <?php  echo $post_object->post_content; ?>
        </div>

        
        </div>
    </div>

    <div class="projects project-6">

        <img src ="<?php echo get_the_post_thumbnail_url( 88, "medium" ); ?>" alt =""> 

        <div class="project-content">
        <?php $post_id = 88;
        $post_object  = get_post( $post_id );  ?>

        <div class="projects-title">
            <?php echo $post_object->post_title; ?> 
        </div>

        <div class="projects-content">
            <?php  echo $post_object->post_content; ?>
        </div>

    
        </div>
    </div>

</div>

<?php 

endif;

get_footer();

