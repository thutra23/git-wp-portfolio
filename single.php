<?php
get_header();

if (have_posts()) :
    // echo "We have posts!";
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/article-long');
    endwhile;

    the_post_navigation(array(
        'prev_text'   =>   'Previous Post: %title',
        'next_text'   =>   'Next Post: %title',
    ));


else :
    echo "We do NOT have posts!";
endif;



get_footer();


