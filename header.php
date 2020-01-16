<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Background video
======================= -->

<?php  if(is_page([
'basket', 'checkout'
])) {
    echo ''; // Don't autoplay on check and basket pages
} else {  ?>

<video autoplay muted loop class="background-video" id="video">
    <source src="<?php if(get_theme_mod('wa_customise_background_video_webm')) {  

            echo get_theme_mod('wa_customise_background_video_webm');

            } else {
                echo get_template_directory_uri() . '/assets/video/WaxAxes.webm';
            }

          ?>" type="video/webm">

    <source src="<?php if(get_theme_mod('wa_customise_background_video_mp4')) {  

            echo get_theme_mod('wa_customise_background_video_mp4');

            } else {
                echo get_template_directory_uri() . '/assets/video/WaxAxes.mp4';
            }

    ?>" type="video/mp4">

    <p>Your browser doesn't support the HTML5 video. Consider upgrading to a more modern browser.</p>

</video><!-- #background video end -->

<?php } ?>


<!-- Primary Navigation
======================= -->

<?php

if( has_nav_menu( 'primary' ) ) {
    wp_nav_menu( [
        'theme_location'        =>  'primary',
        'container'             =>  'nav',
        'menu_class'            =>  'primary-menu',
        'fallback_cb'           =>  false,
        'depth'                 =>  0
    ] );
}

?><!-- #primary navigation end -->


<!-- Custom logo (for every page other than home)
================================================= -->
<?php 

    if( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }  

?>
<!-- #custom logo end -->