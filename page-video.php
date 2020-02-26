<?php get_header(); ?>

<main class="page-content">

<section class="section-music-videos">

<!-- Music Videos 
================= -->
<?php

if( have_rows('video_urls') ): ?>

    <?php
    while ( have_rows('video_urls') ) : the_row(); ?>

        <div class="row">

            <!-- Single music video 
            ======================= -->
            <div class="music-video-container">
                <iframe class="music-video" src="https://www.youtube.com/embed/<?php the_sub_field('url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div><!-- #single music video end -->

        </div>

    <?php

    endwhile; ?>

    
<?php    

else :

echo '<div class="row txt-center">

    <p>No videos right now, check back soon.</p>

</div>';

endif;

?><!-- #end music videos -->

</section>

</main>
<?php get_footer(); ?>