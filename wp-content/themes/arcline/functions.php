<?php

function arcline_enqueue_scripts() {
    // * The CSS
    wp_enqueue_style('arcline-style', get_stylesheet_uri(), array(), '1.0.0');
    
    //* Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

    //* Encued JS with jQuery
    $script_deps = array('jquery');
    if ( class_exists( 'WooCommerce' ) ) {
        $script_deps[] = 'wc-cart-fragments';
    }
    wp_enqueue_script('arcline-nav', get_template_directory_uri() . '/main.js', $script_deps, filemtime( get_template_directory() . '/main.js' ), true);

    // * Here we localize the script to pass the AJAX URL for WooCommerce cart fragments
    if ( class_exists( 'WooCommerce' ) ) {
        wp_localize_script( 'arcline-nav', 'arcline_cart_params', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'wc_ajax_url' => WC_AJAX::get_endpoint( '%%endpoint%%' ),
        ));
    }
}
add_action('wp_enqueue_scripts', 'arcline_enqueue_scripts', 999);

// * Here we are dynamically updating the cart count in the header
function arcline_cart_count_fragments( $fragments ) {
    if ( ! function_exists( 'WC' ) || ! WC()->cart ) {
        return $fragments;
    }

    ob_start();
    ?>
    <span class="cart-contents">BAG (<?php echo WC()->cart->get_cart_contents_count(); ?>)</span>
    <?php
    $fragments['span.cart-contents'] = ob_get_clean();

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'arcline_cart_count_fragments' );