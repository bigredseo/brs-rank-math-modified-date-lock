<?php
/**
 * Plugin Name: Rank Math Modified Date Lock
 * Description: A WordPress plugin to lock the modified date of posts and pages when using Rank Math SEO.
 * Version: 1.1.2
 * Author: Big Red SEO
 * Author URI: https://www.bigredseo.com/
 * Text Domain: brs-rank-math-modified-date-lock
 * Requires Plugins: seo-by-rank-math
 * GitHub URI: https://github.com/bigredseo/brs-rank-math-modified-date-lock
 */

defined( 'ABSPATH' ) || exit;

define( 'BRS_RANK_MATH_MODIFIED_DATE_LOCK_VERSION', '1.1.2' );
define( 'BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE', __FILE__ );

require_once plugin_dir_path( __FILE__ ) . 'includes/activation-check.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/editor-assets.php';

register_activation_hook( __FILE__, 'brs_rank_math_modified_date_lock_activation_check' );
add_action( 'admin_init', 'brs_rank_math_modified_date_lock_admin_init_check' );

function brs_rank_math_modified_date_lock_init() {
	add_action( 'enqueue_block_editor_assets', 'brs_rank_math_modified_date_lock_enqueue_script' );
}
add_action( 'plugins_loaded', 'brs_rank_math_modified_date_lock_init' );
