
<?php 

get_header();

?>

<footer class="site-footer" id="site-footer">
<?php 
         

            wp_nav_menu( array(
                'theme_location'   =>  'menu-social',
                'container'        =>  'nav',
                'container_class'  =>  'menu-social-container',
                'menu_class'       =>  'social-menu',
                'link_before'      =>   '<span class ="screen-reader-text">' ,
                'link_after'       =>   '</span>',

            ) );

        ?>
    <p>© 2021 Rachel Ta</p>


</footer>

</div> <!-- .content-area -->
<?php wp_footer(); ?>
</body>

</html>