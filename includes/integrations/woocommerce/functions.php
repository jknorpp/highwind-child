<?php

/**
 * Adds some more styles to enqueued styles which ensure WooCommerce compatibility
 * @since 1.1.0
 */
function highwind_woocommerce_setup_styles() {
    wp_enqueue_style( 'highwind-child-woocommerce-styles', get_template_directory_uri() . '/includes/integrations/woocommerce/css/style.css' );
}
