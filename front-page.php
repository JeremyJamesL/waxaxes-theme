<?php get_header( 'home' ); ?>


<!-- Logo to be displayed in centre of screen 
============================================= -->
    <?php if( get_field('homepage_logo') ) {
        $logo = get_field( 'homepage_logo' );
        ?>

        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="homepage-logo">
    <?php
    } else {
        echo get_template_directory_uri() . '/assets/images/Wax-Axes-logo-600px.png';
    } ?>
<!-- #End custom logo-->


<?php get_footer(); ?>