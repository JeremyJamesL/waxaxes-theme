<!-- Background video
======================= -->

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