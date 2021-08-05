<?php 
get_header(); 
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">


  <?php if ( is_home() ) : ?>

    <div class="home-page-header">


         <img src ="<?php echo get_the_post_thumbnail_url( 1, "medium" ); ?>" alt =""> 

        <?php $post_id = 1;
                $post_object  = get_post( $post_id ); 
                echo $post_object->post_title;
                echo $post_object->post_content;
                //  echo $post_object -> post_content;
        ?>

    </div>

    <div class="home-about-page">

     <?php $post_id = 57;    
                    $post_object  = get_post( $post_id ); ?>

                    <div class="about-title">
                        <?php echo $post_object->post_title; ?>
                    </div>


    <div class="about-wrap">

               

<div class="about-info">
        <div class="about-img">

            <img src ="<?php echo get_the_post_thumbnail_url( 57, "medium" ); ?>" alt =""> 

        </div>

         <div class="about-content">
            <p><?php echo $post_object->post_excerpt; ?></p>
        </div>

</div>



    <div class="about-skills">

            <?php $post_id = 105;    
                    $post_object  = get_post( $post_id ); ?>

                    <div class="skills-title">
                        <?php echo $post_object->post_title; ?>
                    </div>

                    <div class="skills-content">

                        <?php echo $post_object->post_content; ?>
                    </div>

    </div>

</div>

  </div>



    <div class="home-projects-page">

    <div class="home-projects-title">

        <?php $post_id = 63;
                $post_object  = get_post( $post_id ); 
                echo $post_object->post_title; ?>

    </div>

        <div class="projects-wrap">

         <div class="home-projects home-project-1">

            <img src ="<?php echo get_the_post_thumbnail_url( 73, "medium" ); ?>" alt =""> 

        
            <div class="projects-info">

                <?php $post_id = 73;    
                    $post_object  = get_post( $post_id ); ?>

                    <div class="projects-name hide">
                        <?php echo $post_object->post_title; ?>
                    </div>

                    <div class="learn-more hide">
                    <?php  ?>
                        <a href="<?php echo get_permalink($post_id); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                            <?php echo $post_object->post_excerpt; ?>
                        </a>
                    </div>

            </div>
        </div>




            <div class="home-projects home-project-2">

            <img src ="<?php echo get_the_post_thumbnail_url( 76, "medium" ); ?>" alt =""> 

            <div class="projects-info">

                <?php $post_id = 76;    
                    $post_object  = get_post( $post_id ); ?>

                    <div class="projects-name hide">
                        <?php echo $post_object->post_title; ?>
                    </div>

                    <div class="learn-more hide">
                        <?php echo $post_object->post_excerpt; ?>
                    </div>
            </div>

        </div>




            <div class="home-projects home-project-3">

                <img src ="<?php echo get_the_post_thumbnail_url( 79, "medium" ); ?>" alt =""> 

                <div class="projects-info">

                    <?php $post_id = 79;    
                    $post_object  = get_post( $post_id ); ?>

                <div class="projects-name hide">
                     <?php echo $post_object->post_title; ?>
                </div>

                <div class="learn-more hide">
                        <?php echo $post_object->post_excerpt; ?>
                </div>
            </div>
            </div>




            <div class="home-projects home-project-4">

                <img src ="<?php echo get_the_post_thumbnail_url( 82, "medium" ); ?>" alt =""> 

                <div class="projects-info">

                     <?php $post_id = 82;    
                        $post_object  = get_post( $post_id ); ?>

                    <div class="projects-name hide">
                        <?php echo $post_object->post_title; ?>
                </div>

                <div class="learn-more hide">
                        <?php echo $post_object->post_excerpt; ?>
                </div>
            </div>
            </div>



            <div class="home-projects home-project-5">

                <img src ="<?php echo get_the_post_thumbnail_url( 85, "medium" ); ?>" alt =""> 

                <div class="projects-info">

                     <?php $post_id = 85;    
                        $post_object  = get_post( $post_id ); ?>

                <div class="projects-name hide">
                    <?php echo $post_object->post_title; ?>
                </div>

                <div class="learn-more hide">
                        <?php echo $post_object->post_excerpt; ?>
                </div>
        </div>
        </div>

        <div class="home-projects home-project-6">

            <img src ="<?php echo get_the_post_thumbnail_url( 88, "medium" ); ?>" alt =""> 

            <div class="projects-info">

            <?php $post_id = 88;    
                 $post_object  = get_post( $post_id ); ?>

                <div class="projects-name hide">
                     <?php echo $post_object->post_title; ?>
                </div>

                <div class="learn-more hide">
                        <?php echo $post_object->post_excerpt; ?>
                </div>
        </div>

  </div>

        <div class="home-projects home-project-7">

            <img src ="<?php echo get_the_post_thumbnail_url( 118, "medium" ); ?>" alt =""> 

            <div class="projects-info">

            <?php $post_id = 118;    
                 $post_object  = get_post( $post_id ); ?>

                <div class="projects-name hide">
                     <?php echo $post_object->post_title; ?>
                </div>

                <div class="learn-more hide">
                        <?php echo $post_object->post_excerpt; ?>
                </div>
        </div>
        </div>

        <div class="home-projects home-project-8">

<img src ="<?php echo get_the_post_thumbnail_url( 122, "medium" ); ?>" alt =""> 

<div class="projects-info">

<?php $post_id = 122;    
     $post_object  = get_post( $post_id ); ?>

    <div class="projects-name hide">
         <?php echo $post_object->post_title; ?>
    </div>

    <div class="learn-more hide">
            <?php echo $post_object->post_excerpt; ?>
    </div>
</div>
</div>




        </div>

    </div>

    <div class="home-contact-page">

        <div class="contact-wrap">

        <img src ="<?php echo get_the_post_thumbnail_url( 99, "medium" ); ?>" alt =""> 

            <div class="contact-info">

                <?php $post_id = 99;    
                    $post_object  = get_post( $post_id ); ?>

                    <div class="contact-name">
                        <?php echo $post_object->post_title; ?>
                        <?php echo $post_object->post_content; ?>
                    </div>

        
            </div>
        </div>

    </div>

  </main>

  

<?php

endif;

get_footer();

