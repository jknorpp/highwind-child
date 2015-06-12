<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter( 'highwind_header_gravatar', '__return_false' );

/**
 * Integrations
 */

require_once ( get_template_directory() . '/includes/integrations/woocommerce/functions.php' );






// Hide ALL shipping options when free shipping is available
add_filter( 'woocommerce_available_shipping_methods', 'hide_all_shipping_when_free_is_available' , 10, 1 );

/**
* Hide ALL Shipping option when free shipping is available
*
* @param array $available_methods
*/
function hide_all_shipping_when_free_is_available( $available_methods ) {

  	if( isset( $available_methods['free_shipping'] ) ) :

		// Get Free Shipping array into a new array
		$freeshipping = array();
		$freeshipping = $available_methods['free_shipping'];

		// Empty the $available_methods array
		unset( $available_methods );

		// Add Free Shipping back into $avaialble_methods
		$available_methods = array();
		$available_methods['free_shipping'] = $freeshipping;

	endif;

	return $available_methods;
}