<?php 

function wa_background_customiser($wp_customize){

    //Setting
    $wp_customize->add_setting( 'wa_customise_background_video_webm', [
        'default'           =>      '',
    ] );

    $wp_customize->add_setting( 'wa_customise_background_video_mp4', [
        'default'           =>      '',
    ] );

    //Section
    $wp_customize->add_section( 'wa_background_section',[ 
        'title'             =>      __( 'Wax Axes Background Settings', 'waxaxes' ),
        'priority'          =>      30,
        'panel'             =>      'wa_theme_panel'
    ] ) ;     

    //Control
    $wp_customize->add_control(new WP_Customize_Upload_Control(
        $wp_customize,
        'wa_background_video_webm_control',
        array(
            'label'         =>      __( 'Background video in Webm format', 'waxaxes' ),
            'section'       =>      'wa_background_section',
            'settings'      =>      'wa_customise_background_video_webm'
        )
    ) );

    $wp_customize->add_control(new WP_Customize_Upload_Control(
        $wp_customize,
        'wa_background_video_mp4_control',
        array(
            'label'         =>      __( 'Background video in mp4 format (for fallback)', 'waxaxes' ),
            'section'       =>      'wa_background_section',
            'settings'      =>      'wa_customise_background_video_mp4'
        )
    ) );

}