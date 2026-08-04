<?php
/**
 * Plugin Name: Rank Math Modified Date Lock
 * Description: A WordPress plugin to lock the modified date of posts and pages when using Rank Math SEO.
 * Version: 1.1.2
 * Author: Big Red SEO
 * Author URI: https://www.bigredseo.com/
 * Text Domain: brs-rank-math-modified-date-lock
 */

defined( 'ABSPATH' ) || exit;

define( 'BRS_RANK_MATH_MODIFIED_DATE_LOCK_VERSION', '1.1.2' );

function brs_rank_math_modified_date_lock_init() {
    // Register plugin hooks here.
}
add_action( 'plugins_loaded', 'brs_rank_math_modified_date_lock_init' );