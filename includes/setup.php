<?php

function wa_setup_theme() {

    //Register menus
    register_nav_menu( 'primary', __( 'Primary Menu', 'waxaxes' ) );

    //Theme Support
    add_theme_support( 'custom-logo');
    
}