<?php get_header(); ?>

<!-- Logo to be displayed in centre of screen 
============================================= -->
<?php 

    if( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }  

?><!-- #End custom logo-->


<?php get_footer(); ?>