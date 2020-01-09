<?php

function wa_add_panel_customiser($wp_customize) {
    $wp_customize->add_panel( 'wa_theme_panel', [
        'title'             =>      __( 'Wax Axes Theme Settings', 'waxaxes' ),
        'description'       =>      '<p>Settings for Wax Axes theme</p>',
        'priority'          =>      160,
    ] );
}