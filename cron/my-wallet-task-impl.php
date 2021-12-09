<?php

use DSWallets\Cron\Task;

defined( 'ABSPATH' ) || die( -1 );

class My_Wallet_Task extends Task {

	public function __construct() {
		// Set a priority, lower numbers are for higher priority
		$this->priority = 1000;

		// Finally call the parent constructor
		parent::__construct();
	}

	public function run(): void {
		// You can use $this->log to write to the log file.
		// Logging only work if verbose logging is enabled in:
		// Settings -> Bitcoin and Altcoin Wallets -> Cron tasks -> Verbose logging

		$this->log( 'Hello cron world!' );

		// If we wanted to enqueue an email
		// that will be sent to all the admins
		// who have the manage_wallets capability,
		// here's how we could spam them repeatedly:
		DSWallets\Helpers\wp_mail_enqueue_to_admins(
			'Hello Admins', // subject
			'The My_Wallet_Task example is running. You will be notified about this again, very shortly!' // message
		);
	}
}

new My_Wallet_Task;
