<?php 

function wa_background_customiser($wp_customize){

    //Setting
    $wp_customize->add_setting( 'wa_customise_background_video', [
        'default'           =>      '',
    ] );

    //Section
    $wp_customize->add_section( 'wa_background_section',[ 
        'title'             =>      __( 'Wax Axes Background Settings' ),
        'priority'          =>      30,
        'panel'             =>      'wa_theme_panel'
    ] ) ;     

    //Control
    $wp_customize->add_control(new WP_Customize_Upload_Control(
        $wp_customize,
        'wa_background_video_control',
        array(
            'label'         =>      __( 'Background video', 'waxaxes' ),
            'section'       =>      'wa_background_section',
            'settings'      =>      'wa_customise_background_video'
        )
    ) );

}