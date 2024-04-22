<?php
/**
 * Plugin Name: Pronamic Pay with Mollie for Gravity Forms
 * Plugin URI: https://www.pronamic.eu/plugins/pronamic-pay-with-mollie-for-gravity-forms/
 * Description: Pronamic Pay plugin with Mollie for Gravity Forms integration.
 *
 * Version: 1.4.1
 * Requires at least: 5.9
 * Requires PHP: 8.0
 *
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 *
 * Text Domain: pronamic-pay-with-mollie-for-gravity-forms
 * Domain Path: /languages/
 *
 * Provides: wp-pay/core
 *
 * License: GPL-2.0-or-later
 *
 * GitHub URI: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Autoload.
 */
require_once __DIR__ . '/vendor/autoload_packages.php';

/**
 * Bootstrap.
 */
add_action(
	'plugins_loaded',
	function () {
		load_plugin_textdomain( 'pronamic-pay-with-mollie-for-gravity-forms', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
);

\Pronamic\WordPress\Pay\Plugin::instance(
	[
		'file'                 => __FILE__,
		'action_scheduler'     => __DIR__ . '/packages/woocommerce/action-scheduler/action-scheduler.php',
		'pronamic_service_url' => 'https://api.wp-pay.org/wp-json/pronamic-pay/v1/payments',
	]
);

add_filter(
	'pronamic_pay_modules',
	function ( $modules ) {
		$modules[] = 'subscriptions';

		return $modules;
	}
);

add_filter(
	'pronamic_pay_plugin_integrations',
	function ( $integrations ) {
		$class = \Pronamic\WordPress\Pay\Extensions\GravityForms\Extension::class;

		if ( ! array_key_exists( $class, $integrations ) ) {
			$integrations[ $class ] = new $class();
		}

		return $integrations;
	}
);

add_filter(
	'pronamic_pay_gateways',
	function ( $gateways ) {
		$gateways[] = new \Pronamic\WordPress\Pay\Gateways\Mollie\Integration(
			[
				'manual_url' => \__( 'https://www.pronamicpay.com/en/manuals/how-to-connect-mollie-to-wordpress-with-pronamic-pay/', 'pronamic-pay-with-mollie-for-gravity-forms' ),
			]
		);

		return $gateways;
	}
);
