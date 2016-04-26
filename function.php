function remove_cart_button(){

   $product = get_product();

   if ( is_front_page() && is_home() ) {

       // removing the purchase buttons

                                remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );

 

       remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

       remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );

       remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );

       remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );

       remove_action( 'woocommerce_external_add_to_cart', 'woocommerce_external_add_to_cart', 30 );

   }

}

add_action( 'wp', 'remove_cart_button' );	
