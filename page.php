<?php get_header(); ?>

<?php 

while( have_posts() ){
    the_post();
?>

<main class="page-content">

<!-- Main Content
======================= -->

<section>

    <div class="row">
        <?php the_content(); ?> 
    </div>

</section><!-- #end music audios clips -->

<?php } ?>

</main>
<?php get_footer(); ?>