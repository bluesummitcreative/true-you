<?php

//Allow labels to be hidden
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

//Stop Payments After Six Transactions on 6 Month Empowerment Life Coaching Program
add_action( 'gform_post_add_subscription_payment', function ( $entry ) {
    if ( rgar( $entry, 'payment_status' ) == 'Active' ) {
        $feed       = gf_stripe()->get_payment_feed( $entry );
        $feed_name  = rgars( $feed, 'meta/feedName' );
        $feed_names = array( '6 Payments'); // update this line
 
        if ( in_array( $feed_name, $feed_names ) ) {
            global $wpdb;
            $count = $wpdb->get_var( $wpdb->prepare( "SELECT count(id) FROM {$wpdb->prefix}gf_addon_payment_transaction WHERE lead_id=%d", $entry['id'] ) );
 
            if ( $count == 6 ) { // update this line
                $result = gf_stripe()->cancel( $entry, $feed );
                gf_stripe()->log_debug( "gform_post_add_subscription_payment: Cancelling subscription (feed #{$feed['id']} - {$feed_name}) for entry #{$entry['id']}. Result: " . print_r( $result, 1 ) );
            }
        }
    }
} );

?>
