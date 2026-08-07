# Changelog

For full technical details, see [TECHNICAL-CHANGELOG.md](TECHNICAL-CHANGELOG.md).

## 1.3.1 - 2026-08-07 - BRS infrastructure update

- Updated the GitHub release packaging and release-notes process.

## 1.3.0
- Improved automatic update support for versioned GitHub release packages.
- Improved the WordPress update details window with separate Description and Changelog information.
- Improved updater reliability and compatibility.

## 1.2.1

- Updated the installation and update documentation for packaged GitHub releases.
- Added a link to the complete usage guide on the Big Red SEO website.

## 1.2.0

- Added automatic update support for releases published in the pluginâ€™s public GitHub repository.
- Added the reusable BRS Public GitHub Updater class.

## [1.1.2] - 2026-08-04
- Renamed the plugin to "Rank Math Modified Date Lock" and moved it into its own dedicated plugin folder, no longer usable via functions.php, mu-plugins, or a code snippet plugin.
- The plugin now requires Rank Math SEO to be active before it can be activated, and will deactivate itself if Rank Math is later turned off.
- Internal cleanup for reliability and maintainability. No change to how the plugin behaves for users.

## [1.1.1] - NOT RELEASED

## [1.1.0] - 2026-06-29
- Fixed a bug where the editor could show extra spacing or overlapping content due to how the plugin loaded its script.

## [1.0.0] - 2026-06-28
- Initial release. Automatically turns on Rank Math's "Lock Modified Date" toggle when opening the block editor, so minor edits don't update a post's modified date unless you choose to allow it.
