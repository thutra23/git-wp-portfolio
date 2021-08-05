<?php ?>

<article>
    <h2 class="entry-title"> <?php the_title(); ?></h2>
    <div class="entry-meta">
      Written by <?php the_author_posts_link(); ?>
           on <?php  the_modified_date(); ?>
    </div>
    <div class="entry-thumbnail">
         <?php the_post_thumbnail(); ?>
    </div>
    <div class="entry-content">
          <?php the_content();   ?>
    </div>

    <div class="entry-footer">

          <div class="category-wrapper">
               <i class="fas fa-folder"></i>
               <?php the_category(' '); ?>
          </div>

          <div class="tags-wrapper">
               <i class="fas fa-tag"></i>
               <?php the_tags(" ", " , "); ?>
          </div>

</div>
 </article>