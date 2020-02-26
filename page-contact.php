<?php get_header(); ?>

<main class="page-content">

<?php while( have_posts( )) {
    the_post();
    ?>

<section class="section-blurb mb-5">
    
    <div class="row">

        <!-- Start blurb
        ===================== -->
        <p class="contact-blurb">
            <?php if(get_field('blurb')) {
                echo the_field('blurb');
            }
            ?>
        </p>
        <!-- #end the blurb -->
    </div>

</section>

<section class="section-contact">

    <div class="row">

        <?php the_content(); ?>

    </div>

</section>


<?php
}

?>

</main>
<?php get_footer(); ?>