<?php

function wa_enqueue() {

    $uri        =   get_theme_file_uri();
    $ver        =   WA_DEV_MODE ? time() : false;

    // Register styles
    wp_register_style( 'wa_google_font_novacut', 'https://fonts.googleapis.com/css?family=Nova+Cut&display=swap', [], false );
    wp_register_style( 'wa_google_font_akronim', 'https://fonts.googleapis.com/css?family=Akronim&display=swap', [], false );
    wp_register_style( 'wa_style_main', $uri . '/assets/scss/main.css', [], $ver );

    // Enqueue styles
    wp_enqueue_style( 'wa_google_font_novacut' );
    wp_enqueue_style( 'wa_google_font_akronim' );
    wp_enqueue_style( 'wa_style_main' );

    // Enqueue scripts
    wp_enqueue_script( 'jquery' );

}