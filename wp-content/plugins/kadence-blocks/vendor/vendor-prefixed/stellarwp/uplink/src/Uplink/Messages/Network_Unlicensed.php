<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by kadencewp on 23-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace KadenceWP\KadenceBlocks\StellarWP\Uplink\Messages;

class Network_Unlicensed extends Message_Abstract {
	/**
	 * @inheritDoc
	 */
	public function get(): string {
		return esc_html__( 'No license entered. Consult your network administrator.', '%TEXTDOMAIN%' );
	}
}