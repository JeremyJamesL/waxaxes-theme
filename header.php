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
<a href="<?php echo get_home_url(); ?>">
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<svg class="custom-logo" enable-background="new 0 0 566.93 566.93" version="1.1" viewBox="0 0 566.93 566.93" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">

	<path class="st0" d="m338.31 408.99c0.01-0.2 0.02-0.39 0.03-0.59 1.51-26.1 43.29-37.38 53.66 3.59 0 0 20.72-19.94 11.65-47.94s-52.11-34.22-31.63-54.19c20.12-19.61 45.18 51 45.18 51 25-59.88 5.12-81.03-51.88-94.26-30.47 72.67-123.98 232.3-77.17 249.2 80.11 28.92 143.79-71.26 128.86-131.87-20.63 56.86-80.04 55.84-78.7 25.06z"/>
	<path class="st0" d="m435.24 394.97c54.61 51.24 33.35 120.45 34.98 118.61 77.51-87.74-61.4-109.9-30.56-173.09 22.25-45.6 8.3-91.42 7.16-103.23 57.93 23.53 85.78 76.21 75.83 144.45-51.69-19.55-13.49-77.08-44.82-95.33-30.65 66.44 143.4 256.31 28.34 255.39l-194.31 0.92c-0.47-2.18 118.56-26.86 123.38-147.72z"/>
	<path class="st0" d="m159.12 220c5.74 35.69 10.36 67.26 15.98 98.57 5.93 33.08 3.08 62.18-17.89 87.73-35.01 42.46 10.91 115.67 17.54 136.39-96.52-0.98-68.47-143.52-71.44-153.19-34.02 18.92-41.94 127.5 8.67 151.62-19.91 0-64.2 1.57-80.97 1.57 0-24.59-34.65-200.72 128.11-322.69zm-33.53 169.97s37.07-37.15 22.7-96.01c0 0-60.99 34.24-22.7 96.01z"/>
	<path class="st0" d="m452.68 207.65c-36.61 30.54-12.69 42.17-13.45 68.96-13.45-13.19-49.57-55.03-18.59-87.45 17.5-18.32-15.6-54.47-52.33-159.23 96.25 22.96 75.77 91.98 83.67 111.01 12.03-28.32 46.82-88.68-28.2-91.67 15.7-25.11 45.08-29.76 119.9-20.83 2.31 120.29-58.98 144.12-58.98 144.12 51.07 16.12 42.26 54.8 33.06 123.78-7.46-59.09-65.51-61.32-65.08-88.69z"/>
	<path class="st0" d="m428.93 278.53c-95.69-20.42-93.83-76.92-108.46-96.94-3.74-5.11-14.21 133.87-84.74 141.1 67.99-127.95 0-132.89 109.56-293.31 100.2 139.19 26.76 216.46 83.64 249.15zm-64.94-94.67c0.54-29.12-10.67-61.74-22.14-70.26-0.46 8.57-8.58 31.06-9.45 40.24 9.03 8.01 21.08 20.7 31.59 30.02z"/>
	<path class="st0" d="m173.71 235.45c38.59 33.4 32.65 92.47 63.82 107.86 57.51-36.38 83.86-71.52 82.9-139.43 55.73 158.85-41.74 162.59-54.23 167 78.66 13.92-59.67 121.53 23.46 170.91-157.37 0.9-18.71-110.13-67.1-132.21 0 0-18.75 125.5-39.97 124.65-69.62-118.86 21.86-153.38 21.86-153.38-16.14-17.14-32.44-108.89-30.74-145.4z"/>
	<path class="st0" d="m214.19 27.18c28.9 10.62 35.62 44.55 21.5 71.91-20.5 39.71-35.12 65.55-21.5 118.71-28.13-57.3-34.2-106.3-10.19-167.07-53.06 10.05-104.85 200.65-132.86 176.45-12.38-10.68 3.24-26.31 10.86-34.49 15.97-17.14 33.36-33.19 45.25-53.63 11.17-19.2 15.4-42.62 12.07-64.64-12.67-64.38-63.48-53.39-85.78-39.68-25.61 15.74-49.34 77.97 0 92.48 0 0-6.12-37.95 17.81-44.12s38.22 30.5-1.22 59.9c-28.57 21.29-49.14 56.77-49.18 92.74-0.03 22.59 5.75 44.64 9.99 66.67 4.38 22.74 7.85 46.12 4.41 69.24 15.63-10.06 14.33-70.34 53.38-101.87 48.11-38.85 67.94-63.38 73.58-75.52 32.09 35.89 48.85 72.48 59.88 107.86 48.4-27.34 27.56-218.09 112.39-274.94h-120.39z"/>
	
</svg>
</a>

<!-- #custom logo end -->