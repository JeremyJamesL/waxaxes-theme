<?php

function wa_enqueue() {

    $uri        =   get_theme_file_uri();
    $ver        =   WA_DEV_MODE ? time() : false;

    // Register styles
    wp_register_style( 'wa_style_main', $uri . '/assets/css/main.css', [], $ver );

    // Register scripts
    wp_register_script( 'wa_script_main', $uri . '/assets/js/main.js', [], $ver, true );

    // Enqueue styles
    wp_enqueue_style( 'wa_style_main' );

    // Enqueue scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'wa_script_main');

}