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

<video muted loop class="background-video"> <!-- Don't forget to add back autoplay -->
    <source src="<?php if(get_theme_mod('wa_customise_background_video')) {  

            echo get_theme_mod('wa_customise_background_video');

            } else {
                echo get_template_directory_uri() . '/assets/video/default-background.mp4';
            }

          ?>" type="video/mp4">
</video><!-- #video end -->

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
