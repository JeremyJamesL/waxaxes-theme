<?php get_header(); ?>

<?php 

while( have_posts() ){
    the_post();
?>

<main class="page-content">

<!-- Main Content
================= -->

<section>

    <div class="row">
        <?php the_content(); ?> 
    </div>

</section><!-- #end main content -->

<?php } ?>

</main>
<?php get_footer(); ?>