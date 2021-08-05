<?php 
get_header();


if (have_posts() ) :
    while (have_posts()) :
        the_post();
        get_template_part( 'template-parts/article-long' );
    endwhile;
else: 
    echo "there are no posts.";
endif;





    

