<?php

// Setup
define( 'WA_DEV_MODE', true ); // Determines development or production mode

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/customiser/theme-customiser.php' ) );
include( get_theme_file_path( '/includes/customiser/panels.php' ) );
include( get_theme_file_path( '/includes/customiser/background.php' ) );
include( get_theme_file_path( '/includes/woocommerce-overrides/woocommerce-overrides.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'wa_enqueue' );
add_action( 'after_setup_theme', 'wa_setup_theme' );
add_action( 'after_setup_theme', 'woocommerceoverride' );
add_action( 'customize_register', 'wa_customise_register' );


  