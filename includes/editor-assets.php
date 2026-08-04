<?php
/**
 * Registers and enqueues the block editor script for Rank Math Modified Date Lock.
 *
 * @package Brs_Rank_Math_Modified_Date_Lock
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the block editor script that locks the Rank Math
 * "Lock Modified Date" toggle on when the editor loads.
 */
function brs_rank_math_modified_date_lock_enqueue_script() {
	if ( ! defined( 'RANK_MATH_VERSION' ) ) {
		return;
	}
	$screen = get_current_screen();
	if ( ! $screen || 'post' !== $screen->base ) {
		return;
	}

	$script_path = plugin_dir_path( BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE ) . 'assets/js/lock-modified-date.js';
	$script_url  = plugin_dir_url( BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE ) . 'assets/js/lock-modified-date.js';
	$version     = file_exists( $script_path ) ? filemtime( $script_path ) : BRS_RANK_MATH_MODIFIED_DATE_LOCK_VERSION;

	wp_enqueue_script(
		'brs-rank-math-modified-date-lock',
		$script_url,
		array( 'wp-edit-post' ),
		$version,
		true
	);
}
