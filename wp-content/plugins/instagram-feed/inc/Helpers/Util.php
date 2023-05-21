<?php

namespace InstagramFeed\Helpers;

/**
 * @since 6.1.2
 */
class Util {
	/**
	 * Returns the enabled debugging flag state.
	 *
	 * @return bool
	 */
	public static function isDebugging() {
		return ( defined( 'SBI_DEBUG' ) && SBI_DEBUG === true ) || isset( $_GET['sbi_debug'] ) || isset( $_GET['sb_debug'] );
	}

	public static function isIFPage() {
		return get_current_screen() !== null && ! empty( $_GET['page'] ) && strpos( $_GET['page'], 'sbi-' ) !== false;
	}

	/**
	 * Returns the script debug state.
	 *
	 * @return bool
	 */
	public static function is_script_debug() {
		return ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG === true );
	}

	/**
	 * Get a valid timestamp to avoid Year 2038 problem.
	 * 
	 * @param mixed $timestamp
	 * @return int
	 */
	public static function get_valid_timestamp( $timestamp ) {
		// check if timestamp is negative and set to maximum value
		if ( $timestamp < 0 ) {
			$timestamp = 2147483647;
		}

		if( is_numeric( $timestamp ) ) {
			$timestamp = (int) $timestamp;
			return $timestamp;
		} 

		$new_timestamp = new \DateTime( $timestamp );
		$year = $new_timestamp->format( 'Y' );
		if ( (int) $year >= 2038 ) {
			$new_timestamp->setDate( 2037, 12, 30 )->setTime( 00, 00, 00 );
			$timestamp = $new_timestamp->getTimestamp();
		} else {
			$timestamp = strtotime( $timestamp );
		}

		return $timestamp;
	}

}