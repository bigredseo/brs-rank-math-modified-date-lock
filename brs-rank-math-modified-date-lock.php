<?php
/**
 * Plugin Name: Rank Math Modified Date Lock
 * Plugin URI: https://www.bigredseo.com/rankmath-modified-date-lock-default/
 * Description: Automatically enables Rank Math SEO's Lock Modified Date option when the WordPress block editor loads.
 * Version: 1.3.1
 * Author: Big Red SEO
 * Author URI: https://www.bigredseo.com/
 * Text Domain: brs-rank-math-modified-date-lock
 * Requires Plugins: seo-by-rank-math
 * Update URI: https://github.com/bigredseo/brs-rank-math-modified-date-lock
 */

defined( 'ABSPATH' ) || exit;

define( 'BRS_RANK_MATH_MODIFIED_DATE_LOCK_VERSION', '1.3.1' );
define( 'BRS_RANK_MATH_MODIFIED_DATE_LOCK_FILE', __FILE__ );

if ( ! class_exists( 'BRS_Public_GitHub_Updater', false ) ) {
	require_once plugin_dir_path( __FILE__ )
		. 'includes/class-brs-public-github-updater.php';
}

if ( class_exists( 'BRS_Public_GitHub_Updater', false ) ) {
	BRS_Public_GitHub_Updater::register(
		array(
			'plugin_file' => __FILE__,
			'owner'       => 'bigredseo',
			'repository'  => 'brs-rank-math-modified-date-lock',
			'asset_name'  => 'brs-rank-math-modified-date-lock-{version}.zip',
			'slug'        => 'brs-rank-math-modified-date-lock',
			'name'        => 'Rank Math Modified Date Lock',
			'description' => '
			<p>Rank Math Modified Date Lock automatically enables Rank Math SEO\'s Lock Modified Date option when the WordPress block editor loads.</p>
			<p>This helps prevent minor content edits from unintentionally changing a post or page\'s modified date. Editors can still disable the option before saving when the modified date should be updated.</p>
			<p>Rank Math SEO must be installed and active. The plugin has no separate settings screen.</p>
			',
			'author'      => 'Big Red SEO',
			'homepage'    => 'https://www.bigredseo.com/rankmath-modified-date-lock-default/',
		)
	);
}

require_once plugin_dir_path( __FILE__ ) . 'includes/activation-check.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/editor-assets.php';

register_activation_hook(
	__FILE__,
	'brs_rank_math_modified_date_lock_activation_check'
);

add_action(
	'admin_init',
	'brs_rank_math_modified_date_lock_admin_init_check'
);

/**
 * Initialize the plugin.
 *
 * @return void
 */
function brs_rank_math_modified_date_lock_init(): void {
	add_action(
		'enqueue_block_editor_assets',
		'brs_rank_math_modified_date_lock_enqueue_script'
	);
}

add_action(
	'plugins_loaded',
	'brs_rank_math_modified_date_lock_init'
);