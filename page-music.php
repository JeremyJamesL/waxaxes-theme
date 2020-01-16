<?php get_header(); ?>

<?php 

while( have_posts() ){
    the_post();
?>

<main class="page-content">

    <!-- Music Audios Clips
    ======================= -->

    <section class="section-audio-clips">

        <div class="row">
            <?php the_content(); ?> 
        </div>

    </section><!-- #end music audios clips -->

<?php } ?>

</main>
<?php get_footer(); ?>