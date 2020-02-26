<?php get_header(); ?>

<main class="page-content">

<!-- Check if page content is empty (page uses gutenburg to display Soundcloud / Spotify clips) -->
<?php 

$content = get_post()->post_content;
if(empty($content)): ?>

    <div class="row txt-center">
        <p>Sorry no music at this time, check back soon.</p>
    </div>

<?php else :

while( have_posts() ){ 
    the_post(); 
?>

    <!-- Music Audios Clips
    ======================= -->

    <section class="section-audio-clips">

        <div class="row">
            <?php the_content(); ?> 
        </div>

    </section><!-- #end music audios clips -->  

<?php 
}
?>

</main>
<?php endif; ?>
<?php get_footer(); ?>