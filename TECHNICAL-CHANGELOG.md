# Technical Changelog

Detailed, developer-facing change history. For a plain-language summary, see [CHANGELOG.md](CHANGELOG.md).


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
