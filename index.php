<?php 

get_header(); ?>

<?php 

    if (is_page("about") ): ?>
   
		<?php	get_template_part( 'template-parts/content-about' );?>

<?php endif; ?>


<?php 

    if (is_page("projects") ): ?>

        <?php	get_template_part( 'template-parts/content-projects' );?>

    <?php endif; ?>


<?php 
        if (is_page("services") ): ?>

            <?php	get_template_part( 'template-parts/content-services' );?>                   

    <?php endif; ?> 


<?php 

if (is_page("resume") ): ?>

    <?php	get_template_part( 'template-parts/content-resume' );?>                   

<?php endif; ?> 

<?php 

if (is_page("contact") ): ?>

    <?php	get_template_part( 'template-parts/content-contact' );?>    
    
    <?php endif; ?> 
    
<?php 


if (is_single()): ?>

    <?php	get_template_part( 'template-parts/content-single-project' );?>        

<?php endif; ?> 






<?php
get_footer();
