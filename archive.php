<?php get_header();  ?>

<h2 class="archive-title">
    <?php  the_archive_title();  ?>
</h2>


<div class="category-posts">

<?php 

    // $args = array(
    //     'post_type' => 'post', 
    //     'posts_per_page'  => 4,
    //     'post__not_in' => array(99, 105)
    //   );

    // $posts = new WP_Query($args);

if(have_posts()) :
while (have_posts()):
    the_post();
        get_template_part('template-parts/article-short' );

endwhile;

else :
    echo "We do NOT have posts!";
endif;


?>

<?php the_posts_navigation(); ?>


</div>


<?php get_footer(); ?>

    