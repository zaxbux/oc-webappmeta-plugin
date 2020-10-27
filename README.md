# Web Application Metadata

This October CMS plugin allows you to integrate common web-app metadata on your website. The currently supported tags and files are `theme-color`, and `manifest.json`.

## Requirements

php-xml

## Plugin Settings

### Required Settings

These settings are documented at [Mozilla](https://developer.mozilla.org/en-US/docs/Web/Manifest).

### Colors

Colors used to style the browser UI.

### Icons

Icons for `manifest.webmanifest` (progressive web apps).

### Advanced

More options for `manifest.webmanifest`. In case you need a configuration not covered by the avilable options.

## Components

These components are most useful when included in a layout.

### theme-color Component

The `metaThemeColor` component outputs a meta tag with the configured theme color.

```
[metaThemeColor]
==
{% component 'metaThemeColor' %}
```

### manifest.json Component

The `manifestLink` component outputs a link to `manifest.json`.

```
[manifestLink]
==
{% component 'manifestLink' %}
```

## Change Log
 * 1.1.5 - Update `manifest.json` to be `manifest.webmanifest`, removed legacy `browserconfig.xml`
 * 1.1.4 - Re-ordered backend settings to make more sense
 * 1.1.3 - Localization improvements
 * 1.1.2 - Renamed component
 * 1.1.1 - Localization improvements
 * 1.1.0 - Renamed plugin
 * 1.0.1 - First version

## TODO

 * All done!