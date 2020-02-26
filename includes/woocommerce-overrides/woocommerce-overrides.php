<?php 

function woocommerceoverride() {

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

    add_action( 'woocommerce_no_products_found', function() {

        // Remove Woocommerce default message
        remove_action('woocommerce_no_products_found', 'wc_no_products_found', 10);

        // Define custom message
        $message = 'Nothing here right now. Check back soon for new products';

        echo  '<div class="row txt-center">' .

        $message
    
       . '</div>';
        

    }, 9 );
    
}