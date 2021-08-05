<?php ?>

<article <?php post_class(); ?>>
    <h2 class="entry-title"> 
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry-meta">
      Written by: <?php the_author_posts_link(); ?>
           on <?php  the_modified_date(); ?>
    </div>

    <div class="entry-thumbnail">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    
    <div class="entry-content">
          <?php the_excerpt();   ?>
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