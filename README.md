# Rank Math Modified Date Lock

A WordPress plugin to lock the modified date of posts and pages when using Rank Math SEO.

By default, Rank Math's **Lock Modified Date** toggle in the WordPress block editor is OFF. Rank Math does not currently provide a built-in setting to change this default.

This plugin sets the toggle to ON each time the editor loads, then disconnects immediately so the user can still manually unlock it for that save if needed.

## Why

Rank Math's **Lock Modified Date** toggle prevents WordPress from updating a post's modified date when you save minor changes. That can be useful for SEO and content management when you do not want a small edit, image swap, typo fix, or layout adjustment treated like a meaningful content update.

However, Rank Math does not currently provide a setting to make this toggle ON by default. That means editors have to remember to enable it before saving minor updates.

This plugin removes that friction by setting **Lock Modified Date** to ON when the editor loads, while still allowing the user to manually turn it OFF for any save where the modified date should be updated.

## Requirements

* WordPress 5.0+ (block editor)
* Rank Math SEO plugin, active
* WordPress 6.5+ recommended, so the `Requires Plugins` header can prevent activation without Rank Math present. On earlier versions, an activation check handles this instead.

## File Structure

```
brs-rank-math-modified-date-lock/
├── brs-rank-math-modified-date-lock.php
├── includes/
│   ├── activation-check.php
│   └── editor-assets.php
└── assets/
    └── js/
        └── lock-modified-date.js
```

## Installation

Upload the `brs-rank-math-modified-date-lock` folder to your `wp-content/plugins/` directory, or zip the folder and upload it through **Plugins > Add New > Upload Plugin** in the WordPress admin. Activate it like any other plugin.

Rank Math SEO must be installed and active first. On WordPress 6.5+, the Activate link is disabled until Rank Math is active. On earlier versions, activating without Rank Math active will automatically deactivate this plugin and show an explanation.

## Behavior

* Runs on post edit screens, including posts, pages, and custom post types.
* Does nothing if Rank Math is not active.
* Fires once per editor load.
* Disconnects as soon as the toggle is found and checked.
* Leaves the toggle alone if it is already checked.
* Does not interfere with the user manually unlocking the date for a given save.
* If Rank Math is deactivated later while this plugin remains active, this plugin deactivates itself and shows an admin notice explaining why.

## Notes

This works by observing the editor DOM for Rank Math's **Lock Modified Date** toggle, then clicking it if unchecked.

This is not a Rank Math API integration. If Rank Math or WordPress changes the block editor markup in a future release, this plugin may need to be updated.

## Author

Built and maintained by [Big Red SEO](https://www.bigredseo.com), a WordPress development and SEO company in Omaha, Nebraska.

## License

GPL-2.0-or-later
