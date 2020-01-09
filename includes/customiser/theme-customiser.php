<?php

function wa_customise_register($wp_customize){

    wa_add_panel_customiser($wp_customize);
    wa_background_customiser($wp_customize);

    // $wp_customize->add_setting( )

    // $wp_customize->add_section( 'wa_theme_settings', [
    //     'title'             =>      __( 'Wax Axes theme settings', 'waxaxes' ),
    //     'description'       =>      'Change background video and other settings',
    // ] );


    // $wp_customize->add_control( )

}