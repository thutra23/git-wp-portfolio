<?php

get_header();

?>


<?php

if (is_page("about")) :  ?>

    <?php $post_id = 57;
    $post_object  = get_post($post_id); ?>

    <div class="about-page-title">
        <?php echo $post_object->post_title; ?>
    </div>


    <div class="about-page-info">

        <img src="<?php echo get_the_post_thumbnail_url(57, "medium"); ?>" alt="">

        <div class="about-page-content">
            <?php echo $post_object->post_content; ?>
        </div>

    </div>
    </div>

<?php

endif;

get_footer();
