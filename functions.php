<?php

/*
Change Place Order button text on checkout page in woocommerce
*/

add_filter('woocommerce_order_button_text','codeithub_custom_order_button_text',1);

function codeithub_custom_order_button_text($order_button_text) {
	
	$order_button_text = 'Book Now';
	
	return $order_button_text;
}
?>
