<?php get_header(); ?>

<?php if (is_page("about")) :  ?>

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


if (is_page("projects")) : ?>

    <h1 class="projects-page-heading">PROJECTS</h1>

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
        'posts_per_page'  => -1,
        'post__not_in' => array(99, 105)
      );
    $posts = new WP_Query($args);

?>


<div class="projects-page">
<?php if ( $posts -> have_posts()):
while ($posts -> have_posts()):
    $posts -> the_post();
    get_template_part('template-parts/content-projects');
endwhile;

endif; 

endif;

?>

</div>


<?php
if (is_page("contact")) : 
    

  get_template_part('template-parts/content-contact'); 

 endif; 


 get_footer(); 
