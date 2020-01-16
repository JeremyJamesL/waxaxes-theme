<?php

function wa_setup_theme() {

    //Register menus
    register_nav_menu( 'primary', __( 'Primary Menu', 'waxaxes' ) );

    //Theme Support
    add_theme_support( 'custom-logo');
    add_theme_support( 'title-tag');
    add_theme_support( 'woocommerce' );
    
}