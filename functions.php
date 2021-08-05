<?php

// Change all instances of rachelthutrata to your theme name.
if ( ! function_exists( 'rachelthutrata_setup' ) ) :
 
   function rachelthutrata_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 200, 200, true );
     }

     register_nav_menus( array(
        'menu-main'       =>    'Main Menu',
        'menu-footer'     =>    'Secondary Menu',
        'menu-social'     =>    'Social Menu',
        ) );
   }
 
endif;
 
add_action('after_setup_theme', 'rachelthutrata_setup');
 
function rachelthutrata_scripts_styles(){
   wp_enqueue_style('rachelthutrata_style', get_stylesheet_uri());
   wp_enqueue_style( 'rachelthutrata_googlefont', 'https://fonts.googleapis.com/css2?family=Playfair+Display&family=Raleway:wght@100;200;400', array(), null);
   wp_enqueue_script('rachelthutrata_script_navigation_js', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
   wp_enqueue_style( 'rachelthutrata_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

}
 
add_action('wp_enqueue_scripts', 'rachelthutrata_scripts_styles');


function my_excerpt_length($length){
    return 2;
}
add_filter(‘excerpt_length’, ‘my_excerpt_length’);
