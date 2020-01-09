<?php get_header(); ?>

<!-- Music Videos 
================= -->
<?php

// check if the repeater field has rows of data
if( have_rows('video_urls') ):

 	// loop through the rows of data
    while ( have_rows('video_urls') ) : the_row(); ?>


        <div class="video-container">
            <iframe width="560" height="315" src="<?php the_sub_field('url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    <?php
    endwhile;

else :

    // no rows found

endif;

?>

<?php get_footer(); ?>