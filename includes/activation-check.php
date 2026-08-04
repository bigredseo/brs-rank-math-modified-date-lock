<?php
/**
 * Activation guard: prevents this plugin from running without Rank Math SEO.
 *
 * @package Brs_Rank_Math_Modified_Date_Lock
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'deactivate_plugins' ) || ! function_exists( 'is_plugin_active' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

/**
 * Fallback check for WordPress versions below 6.5, where the
 * "Requires Plugins" header is not enforced by core. If Rank Math
 * isn't active on activation, deactivate this plugin and explain why.
 */
function brs_rank_math_modified_date_lock_activation_check() {
	if ( defined( 'RANK_MATH_VERSION' ) ) {
		return;
	}

	deactivate_plugins( plugin_basename( BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE ) );

	wp_die(
		esc_html__( 'Rank Math Modified Date Lock requires the Rank Math SEO plugin to be installed and active.', 'brs-rank-math-modified-date-lock' ),
		esc_html__( 'Plugin Activation Error', 'brs-rank-math-modified-date-lock' ),
		array( 'back_link' => true )
	);
}

/**
 * Ongoing safety check: if Rank Math is deactivated later while this
 * plugin remains active, deactivate this plugin too and show an
 * admin notice explaining why.
 */
function brs_rank_math_modified_date_lock_admin_init_check() {
	if ( defined( 'RANK_MATH_VERSION' ) ) {
		return;
	}
	if ( ! is_plugin_active( plugin_basename( BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE ) ) ) {
		return;
	}

	deactivate_plugins( plugin_basename( BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE ) );
	add_action( 'admin_notices', 'brs_rank_math_modified_date_lock_deactivated_notice' );

	if ( isset( $_GET['activate'] ) ) {
		unset( $_GET['activate'] );
	}
}

/**
 * Admin notice shown after this plugin is auto-deactivated because
 * Rank Math is no longer active.
 */
function brs_rank_math_modified_date_lock_deactivated_notice() {
	?>
	<div class="notice notice-error">
		<p><?php esc_html_e( 'Rank Math Modified Date Lock has been deactivated because Rank Math SEO is no longer active.', 'brs-rank-math-modified-date-lock' ); ?></p>
	</div>
	<?php
}
