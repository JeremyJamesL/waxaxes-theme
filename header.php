<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <?php wp_head(); ?>
</head>

<body>

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

<div id="video-controls">
    <button type="button" class="play-pause" id="play-pause">+</button>
</div>

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
