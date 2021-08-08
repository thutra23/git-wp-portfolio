<?php
get_header();
?>

<!-- <div id="primary" class="content-area">
      <main id="main" class="site-main"> -->


<?php //if (is_home()) : 
?>

<div class="home-page-header">
      <img src="<?php echo get_the_post_thumbnail_url(12, "medium"); ?>" alt="">

      <?php $post_id = 12;
      $post_object  = get_post($post_id); ?>
      
      <div class="home-header">
            <?php echo $post_object->post_content; ?>
      </div>
     
      <a href="projects"><button class ="wp-block-button__link">View my projects</button></a>
      
</div>

<div class="home-about-page">

      <?php $post_id = 57;
      $post_object  = get_post($post_id); ?>

      <div class="about-title">
            <?php echo $post_object->post_title; ?>
      </div>

      <div class="about-wrap">

            <div class="about-info">
                  <div class="about-img">

                        <img src="<?php echo get_the_post_thumbnail_url(57, "medium"); ?>" alt="">

                  </div>

                  <div class="about-content">
                        <p><?php echo $post_object->post_excerpt; ?></p>
                  </div>

            </div>

            <div class="about-skills">

                  <?php $post_id = 105;
                  $post_object  = get_post($post_id); ?>

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

<div class="projects-title">
      PROJECTS
</div>

<div class="projects-categories">

<?php

$categories = get_categories();
foreach($categories as $category) {
   echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
}
?>

</div>

<?php 

    $args = array(
        'post_type' => 'post', 
        'posts_per_page'  => 6,
        'post__not_in' => array(99, 105)
      );
    $posts = new WP_Query($args);

?>


<div class="projects-wrap">
<?php if ( $posts -> have_posts()):
while ($posts -> have_posts()):
    $posts -> the_post();
    get_template_part('template-parts/content-projects');
endwhile;

endif; 




?> 

</div>



<div class="home-contact-page">

      <div class="contact-wrap">

            <img src="<?php echo get_the_post_thumbnail_url(99, "medium"); ?>" alt="">

            <div class="contact-info">
                  
                  <?php
                  $contact = new WP_Query(array(
                        'p'  => 99
                        
                  ));

                  if ($contact->have_posts()): 
                        $contact->the_post(); ?>
                        
                        <div class="contact-name">
                              <?php the_title(); ?>
                        </div>

                        <div class="contact-form">
                              <?php the_content(); ?>
                        </div>

            </div>

                  <?php
                  endif;

                  ?>

                       
            </div>


            </div>
      </div>

</div>

<?php //endif;

get_footer();
