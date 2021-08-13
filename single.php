<?php
get_header();

// $args = array(
//     'post_type' => 'post', 
//     'posts_per_page'  => 1,
//     'post__not_in' => array(99, 105)
//   );
// $posts = new WP_Query($args);


if (have_posts()) :
    // echo "We have posts!";
    while ( have_posts()) :
        the_post();
        get_template_part('template-parts/article-long');
    endwhile;

    // the_post_navigation(array(
    //     'prev_text'   =>   'Previous Post: %title',
    //     'next_text'   =>   'Next Post: %title',
    // ));


else :
    echo "We do NOT have posts!";
endif;



get_footer();


