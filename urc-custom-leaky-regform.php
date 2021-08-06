<?php
/**
 * Plugin Name: URC Custom Leaky Registration From
 * Description: Extends the Leaky Paywall plugin and use a custom registration form.
 * Version: 1.0
 * Author: Jake Almeda
 * Author URI: http://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


// INCLUDE LEAKY'S FUNCTION
include_once( 'urc-leakys-regform.php' );


// ENQUEUE STYLE IN PUBLIC (LIVE)
add_action( 'wp_footer', 'urc_custom_leaky_js' );
function urc_custom_leaky_js() {

    wp_register_script( 'urc-custom-leaky-js', plugins_url( 'js/asset.js', __FILE__ ), NULL, '1.0', TRUE );
    wp_enqueue_script( 'urc-custom-leaky-js' );

}


// SHORTCODE
add_shortcode('urc_leaky_paywall_register_form', 'do_leaky_paywall_register_form_urc');
/*
$exe = new URCExtendLeakyRegForm();
class URCExtendLeakyRegForm {

	/ **
	 * Handle the output
	 * /
	public function __construct() {

		// Enqueue scripts
		if ( !is_admin() ) {

			add_shortcode( 'leaky_custom_regform', array( $this, 'leaky_custom_regform_main_function' ) );
			

			// Submit the form
			//add_action( 'admin_post_add_foobar', array( $this, 'leaky_custom_regform_submit' ) );

		}

	}

	/ **
	 * Registration Form - Layout
	 * /
	public function leaky_custom_regform_main_function() {

		return '<div class="item-custom-leaky-form">
			<form method="post" action="?action=add_foobar">
				
				<div class="container">

					<label for="user_name"><b>Name</b></label>
					<input type="text" placeholder="Enter Name" name="user_name" id="user_name" required>

					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" id="email" required>

					<label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" id="psw" required>


					<button type="submit" class="leaky-paywall-checkout-button">Subscribe</button>

				</div>

			</form>
		</div>';

	}


	/ **
	 * Leaky Paywall's provided code
	 * /
	public function zeen101_add_new_subscriber_manually( $args ) {

		// ORIGINAL
		$email = 'test@example.com';

		if ( email_exists( $email ) ) {
			return;
		}

		// example arguements. adjust as needed for each subscriber
		$subscriber_args = array(
			'password' => wp_generate_password(),
			'first_name'	=> 'Test',
			'last_name'	=> 'Example',
			'level_id'	=> 1,
			'subscriber_id'	=> 'ABC123',
			'created'	=> date( 'Y-m-d H:i:s' ),
			'price'	=> 1000,
			'plan'	=> '',
			'interval_count' => 12,
			'interval'	=> 'month',
			'recurring'	=> false,
			'currency' => leaky_paywall_get_currency(),
			'new_user'	=> true,
			'payment_gateway'	=> 'stripe',
			'payment_status'	=> 'active',
			'site'	=> leaky_paywall_get_current_site(),
			'mode' => leaky_paywall_get_current_mode()
		);

		leaky_paywall_new_subscriber( null, $email, '', $subscriber_args );

	}

}
*/
