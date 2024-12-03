function auto_link_guest_order_to_account($order_id) {
    $order = wc_get_order($order_id);

    $order_email = $order->get_billing_email();

    $user = get_user_by('email', $order_email);

    if ($user && $order->get_user_id() == 0) {
        $order->set_customer_id($user->ID);
        $order->save();
    }
}

add_action('woocommerce_checkout_order_processed', 'auto_link_guest_order_to_account', 10, 1);
