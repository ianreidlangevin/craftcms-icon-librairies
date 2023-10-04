<p><img src="./src/icon.svg" width="100" height="100" alt="Icon Libraries plugin icon"></p>

<h1>Icon Libraries for Craft CMS</h1>

Easily integrate various SVG icon libraries with Craft CMS's native SVG function.

## Requirements

This plugin requires Craft CMS 4.x or later

## Installation

To install the plugin, follow these instructions.

1. In your terminal, go to your Craft project:

        cd /path/to/project

2. Use Composer to load and install the plugin:

        composer require ianreid/iconlibraries -w && php craft plugin/install iconlibraries


## Usage

To utilize the SVGs from the provided libraries, you can simply use the Craft CMS's native SVG function:

```
{{ svg('@phosphor/shield.svg')|attr({ class: 'w-8 h-8 text-gray-500' }) }}
```

Example: For using an icon from the phosphor icons library:

```
{{ svg('@heroicons/o-arrow-right.svg')|attr({ class: 'w-8 h-8 text-green-500' }) }}
```

## Available Icon Libraries

- **[Phosphor](https://phosphoricons.com/)**
- **[Heroicons](https://heroicons.com/)** - When using an icon from Heroicons, prefix the icon name with:
  - `o-` for outline icons
  - `s-` for solid icons
  - `m-` for mini icons

## SVG Sanitization and Namespacing

By default, if you use the native SVG function, the **SVG will be sanitized** of potentially malicious scripts using svg-sanitizer, and any IDs or class names within the document will be namespaced so they don’t conflict with other IDs or class names in the DOM. You can **disable** those behaviors using the `sanitize` and `namespace` arguments:

```
{{ svg('@phosphor/shield.svg', sanitize=false, namespace=false) }}
```




---


This plugin is brought to you by [Ian Reid Langevin](https://www.reidlangevin.com)
