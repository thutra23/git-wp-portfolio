<?php 

get_header(); 


if (have_posts()) :
    while (have_posts()):
        the_post();
        the_title();
        the_post_thumbnail();
        the_content();
    endwhile;
else:
    echo "We do NOT have posts!";
endif;


get_footer();

