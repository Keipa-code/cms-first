# Pure CSS Landing Page for October

Port of the Pure CSS Landing Page layout example that shows off a responsive product landing page. A quick and easy way to start with the [Pure CSS](http://purecss.io) framework in [October CMS](https://github.com/octobercms/october).

## Installation

`$ php artisan theme:install pure-landing`

## Activate the theme

`$ php artisan theme:use <name>`

Where `<name>` is whatever you specified in `theme:install`.

## After installing

### This theme includes three asset files:
- `assets/css/app.css`
- `assets/css/app-old-ie.css`
- `assets/js/app.js`

You can either continue building on them or delete them - it's your choice.

### Font Awesome

Font Awesome is loaded from CDN in the default template. If you don't want to use it, just remove the relevant line of code.

### IE8 Support

The theme includes IE8 specific stylesheets for the Pure CSS Grid and the theme styling, but these aren't loaded by default. If you want to use them, they can be included using IE8 conditional tags.

### Customizing Pure CSS

Consult the [official documentation](http://purecss.io/) for more information on the Pure CSS framework.

### JavaScript

Pure is a CSS only framework and doesn't include any jQuery plugins.

This theme includes the `@jquery`, `@framework` and `@framework.extras` JS assets in the layout file. They can be removed unless you actually will be using them.

### Other files

`README.md` may be deleted.

`version.yaml` may be deleted.

`theme.yaml` may be edited (not deleted).

`assets/images/file-icons.png` may be deleted.

`assets/images/icon.png` should either be deleted or replaced with a site icon of your own.

`assets/images/theme-preview.png` should either be deleted or replaced with a screenshot of your final theme.

Consult the [official documentation](https://octobercms.com/docs/themes/development) for more information on theme development.
