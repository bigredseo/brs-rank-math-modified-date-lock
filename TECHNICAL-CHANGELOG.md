# Technical Changelog

Detailed, developer-facing change history. For a plain-language summary, see [CHANGELOG.md](CHANGELOG.md).

## 1.3.0

- Updated the bundled BRS Public GitHub Updater class.
- Added support for `{version}` placeholders in GitHub release asset filenames.
- Changed update metadata to return the required `version` field to WordPress.
- Added configurable plugin description content for the update details modal.
- Separated the Description and Changelog sections in the WordPress plugin information response.
- Added six-hour caching for successful GitHub release responses.
- Added 15-minute caching for failed GitHub release requests.
- Added nonfatal updater registration error handling.
- Added explicit optional-value filtering instead of relying on unqualified `array_filter()`.
- Set the embedded updater filters to priority `20` so the BRS central updater can take precedence at priority `10`.
- Improved validation of configured ZIP asset filename patterns.

## 1.2.1

- Replaced the previous manual installation instructions in `README.md` with installation instructions for the packaged release ZIP.
- Documented the plugin’s automatic GitHub release update support.
- Documented the required release asset filename and plugin directory structure.
- Added links to the public Big Red SEO usage guide and the project changelog files.
- Changed the plugin’s public-facing homepage to the Big Red SEO usage guide while retaining the GitHub repository as its `Update URI`.

## 1.2.0

- Added `includes/class-brs-public-github-updater.php`.
- Registered the plugin with `BRS_Public_GitHub_Updater`.
- Added the GitHub repository as the plugin `Update URI`.
- Added the GitHub repository as the plugin `Plugin URI`.
- Configured the updater to use published GitHub releases rather than repository commits.
- Configured the expected release asset filename as `brs-rank-math-modified-date-lock.zip`.
- Added support for WordPress’s external plugin update and plugin-information APIs.
- Added transient caching for GitHub release responses and temporary caching for failed API requests.
- Added compatibility behavior allowing the embedded updater to coexist with the BRS central GitHub update manager.

## [1.1.2] - 2026-08-04
### Changed
- Extracted the block editor script from an inline PHP heredoc into `assets/js/lock-modified-date.js`, now loaded via `wp_enqueue_script()` with `filemtime()`-based cache busting instead of `wp_add_inline_script()`.
- Dropped mu-plugins and code snippet plugin support. This plugin now distributes and installs only as a standard WordPress plugin (folder upload to `wp-content/plugins/` or ZIP upload through the admin), since the split file structure cannot be loaded through those methods.
- Added a `Requires Plugins: seo-by-rank-math` header (WordPress 6.5+) so this plugin cannot be activated unless Rank Math SEO is already active.
- Added `includes/activation-check.php` as a fallback for WordPress versions below 6.5, and as an ongoing safety check: if Rank Math is later deactivated while this plugin remains active, this plugin now deactivates itself and shows an admin notice explaining why.
- No functional or behavioral changes to the core toggle-locking logic.

## [1.1.1] - NOT RELEASED

## [1.1.0] - 2026-06-29
### Fixed
- Replaced raw `<script>` tag output (echoed via `enqueue_block_editor_assets`) with `wp_add_inline_script()` attached to the `wp-edit-post` handle. The previous approach caused the browser to render the editor in Quirks Mode, resulting in excessive padding above and below blocks and blocks overlaying meta boxes.

### Changed
- Script logic is now returned from a separate function (`brs_get_lock_rankmath_modified_date_script()`) and passed to `wp_add_inline_script()` rather than being echoed directly into page output.

## [1.0.0] - 2026-06-28
### Added
- Initial release.
- Defaults Rank Math's "Lock Modified Date" toggle to ON when opening the WordPress block editor.
- Uses a `MutationObserver` to detect when the toggle renders, clicks it once if unchecked, then disconnects so users can still manually unlock it for a given save.
- Scoped to post edit screens only (`$screen->base === 'post'`).
- No-ops if RankMath is not active.
