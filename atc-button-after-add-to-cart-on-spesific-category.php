<?php

/**
 * ATC BUTTON SHUFFLE on CATEGORY Manic & Alto
 */
add_action( 'woocommerce_after_add_to_cart_form', 'shuffle_altomanic' );
function shuffle_altomanic() {
	if ( is_product() && has_term( array( 'manic','alto' ), 'product_cat' ) && !has_term( array( 'mach-1' ), 'product_cat' )) {
		echo 
		'<a href="https://hijacksandals.com/shuffle/" 	
			class="button button-shuffle"
			>
		</a>';	
	}  
}
