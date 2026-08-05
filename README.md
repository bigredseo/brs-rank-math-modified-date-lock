# Rank Math Modified Date Lock

A free WordPress plugin that automatically enables Rank Math SEO’s **Lock Modified Date** option when the block editor loads.

This helps prevent minor edits from unintentionally changing the modified date displayed or recorded for a post or page.

## How It Works

Rank Math includes a **Lock Modified Date** setting, but the setting is normally disabled each time the editor loads.

This plugin enables that setting automatically.

Editors can still disable **Lock Modified Date** before saving when an edit should update the modified date. The plugin only changes the default state; it does not prevent editors from changing it.

## Requirements

* WordPress
* Rank Math SEO
* The WordPress block editor

Rank Math SEO must be installed and active before this plugin can be activated.

## Installation

### Install the Released Plugin

1. Open the repository’s **Releases** page on GitHub.
2. Download the ZIP file attached to the latest release:
   `brs-rank-math-modified-date-lock.zip`
3. In WordPress, go to **Plugins → Add New Plugin**.
4. Select **Upload Plugin**.
5. Choose the downloaded ZIP file.
6. Select **Install Now**.
7. Activate **Rank Math Modified Date Lock**.

Do not download GitHub’s automatically generated **Source code** ZIP files. Use the packaged plugin ZIP attached to the release.

## Updating

The plugin checks its public GitHub repository for published releases and integrates available updates with the standard WordPress plugin update system.

When a newer release is available, the update appears in:

* **Dashboard → Updates**
* The WordPress **Plugins** screen
* WordPress automatic-update controls, when automatic updates are enabled

No separate updater plugin or GitHub account is required.

## Usage

After activation:

1. Open a post or page in the WordPress block editor.
2. Locate Rank Math’s modified-date setting.
3. The **Lock Modified Date** option will be enabled automatically.
4. Leave it enabled for minor edits that should not change the modified date.
5. Disable it before saving when the modified date should be updated.

The plugin has no separate settings screen.

## More Information

Read the full explanation, including why modified dates matter and when the lock should be disabled:

[Stop Rank Math From Updating Your Modified Date by Default](https://www.bigredseo.com/rankmath-modified-date-lock-default/)

## Support

Use the repository’s GitHub issue tracker to report a reproducible plugin defect.

For general WordPress, Rank Math, website-development, or SEO assistance, visit [Big Red SEO](https://www.bigredseo.com/).

## Development

The plugin uses published GitHub releases for distribution.

Each release must include a packaged ZIP asset named:

```text
brs-rank-math-modified-date-lock.zip
```

The ZIP must extract into this directory:

```text
brs-rank-math-modified-date-lock/
```

GitHub’s automatically generated source-code archives are not used for WordPress updates.

## License

This plugin is licensed under GPL-2.0-or-later.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for user-facing changes and [TECHNICAL-CHANGELOG.md](TECHNICAL-CHANGELOG.md) for implementation details.
