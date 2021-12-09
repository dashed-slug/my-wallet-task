<?php
/*
 * Plugin Name: My Wallet Task
 * Description: Defines a cron job for Bitcoin and Altcoin Wallets 6.0.0 or later. This is sample code for cron job developers. See the plugin's documentation for details.
 * Version: 1.0
 * Plugin URI: http://example.com
 * Author: author@example.com
 * Author URI: http://example.com/author
 * Text Domain: my-wallet-task
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * @license GNU General Public License, version 2
 */

// don't load directly
defined( 'ABSPATH' ) || die( '-1' );

add_action(
	'plugins_loaded',
	function(): void {
		if ( class_exists( '\DSWallets\Cron\Task' ) ) {
			include_once __DIR__ . '/cron/my-wallet-task-impl.php';
		}
	}
);
