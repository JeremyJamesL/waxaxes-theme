<?php get_header(); ?>

<main class="page-content">

<section class="section-audio-clips">

<!-- Music Audios Clips
======================= -->
<?php

if( have_rows('video_urls') ): ?>

    <?php
    while ( have_rows('video_urls') ) : the_row(); ?>

        <div class="row">

            <div class="music-video-container">
                <iframe class="music-video" width="560" height="315" src="<?php the_sub_field('url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>

    <?php

    endwhile; ?>

    
<?php    

else : endif;

?><!-- #end music audios clips -->

</section>


</main>
<?php get_footer(); ?>