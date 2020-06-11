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

<?php get_template_part( '/partials/background-video' ); ?>


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

