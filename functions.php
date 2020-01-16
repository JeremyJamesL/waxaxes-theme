<?php

// Setup
define( 'WA_DEV_MODE', true ); // Determines development or production mode

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/customiser/theme-customiser.php' ) );
include( get_theme_file_path( '/includes/customiser/panels.php' ) );
include( get_theme_file_path( '/includes/customiser/background.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'wa_enqueue' );
add_action( 'after_setup_theme', 'wa_setup_theme' );
add_action( 'customize_register', 'wa_customise_register' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
  