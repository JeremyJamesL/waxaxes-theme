<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159129477-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-159129477-1');
        </script>
        
</head>

<body <?php body_class(); ?>>

<!-- Background video
======================= -->

<video autoplay muted loop class="background-video" id="video"> <!-- Don't forget to add back autoplay -->
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


<!-- Background video controls
========================== -->

<!-- <div id="video-controls">
    <button type="button" class="play-pause" id="play-pause">+</button>
</div> -->

<!-- #End background video controls -->



<!-- Primary Navigation
======================= -->

<?php

if( has_nav_menu( 'primary' ) ) {
    wp_nav_menu( [
        'theme_location'        =>  'primary',
        'container'             =>  '<nav>',
        'menu_class'            =>  'primary-menu',
        'fallback_cb'           =>  false,
        'depth'                 =>  0
    ] );
}

?><!-- #primary navigation end -->

