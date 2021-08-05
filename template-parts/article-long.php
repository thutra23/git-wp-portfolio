<?php ?>
<article <?php post_class(); ?> >   


<h2 class="entry-title">
<?php 
   if (is_single()) :
    the_title();
  else : ?>
    <a href = "<?php the_permalink();?>"><?php the_title(); ?></a>
  <?php endif; ?>
 </h2>

 <div class="entry-category"><?php the_category( ' &#10045; ' ); ?></div>


 <div class="entry-thumbnail">
 <?php
 if ( is_home() ) :
  the_post_thumbnail(); 
 
  endif;

  if ( is_search() ) :
    the_post_thumbnail(); 
   
  endif;

  if (is_category()) :
    the_post_thumbnail(); 
  endif;

  if (is_tag()) :
    the_post_thumbnail(); 
  endif;

 ?> 
 </div>


<div class="entry-content">
<?php 
    if ( is_single() ) :
      the_post_thumbnail();
      the_content();  ?>

      <div class="entry-footer">

          <div class="category-wrapper">
               <i class="fas fa-folder"></i>
               <?php the_category("  &#9679;  "); ?>
          </div>

          <div class="tags-wrapper">
               <i class="fas fa-tag"></i>
               <?php the_tags(" Tags: ", " | "); ?>   
    </div>
     </div>
    <?php 
    else :
      the_excerpt();
    endif;

    ?>

  
</div>
  
</article>
