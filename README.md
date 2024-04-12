# Silverstripe BootLoader - a Bootstrap Loader

Silverstripe BootLoader is an extension designed to seamlessly integrate Bootstrap 5 framework files into Silverstripe projects. It injects CSS and JS into your website's requirements.
It's allowing styling of Bootstrap by injecting your own SCSS's with variables and overrides.

Bootstrap version included:
`5.3.3`


## Requirements

* Compatible with Silverstripe versions 4 and 5
* Optionally (for customization and compiling) a theme named `main`


## Installation

Install using Composer:
```sh
composer require minimalic/silverstripe-bootloader
```

Refresh your database by navigating to your website's root directory in the shell and running:
`vendor/bin/sake dev/build "flush=all"`

Or use your base URL with:
`/dev/build?flush=all`


## Customization

### About customization

The customization step is optional. You can override standard [Bootstrap variables](https://github.com/twbs/bootstrap/tree/v5.3.3/scss) with `_bs-variables.scss` inside your `themes/main/scss/` directory.
> [!WARNING]
> Customization may modify all of your CSS files inside `themes/main/css/` (if any) by using `css-prefix` and other tools needed to compile Bootstrap.


### Getting tools

If you need to inject your own Bootstrap variables and overrides, you should start with installing `sass`, `nodemon` and `postcss` using `npm`.


### Customized Bootstrap Variables files

Compiling requires these two files in your `themes/main/scss/` directory:

`_bs-variables.scss`

`_bs-variables-end.scss`

The first one will be loaded at the beginning right after `@import "functions";` and the second one after all other Bootstrap modules.
You can create variables overrides inside the SCSS files.


### Compiling Bootstrap

Now you can compile new customized Bootstrap CSS file using:

```sh
cd vendor/minimalic/silverstripe-bootloader/client/src/
npm run-script watch
```
or alternatively directly from Silverstripe root directory:

```sh
npm --prefix ./vendor/minimalic/silverstripe-bootloader/client/src/ run-script watch
```

A new `bootstrap-custom.css` will be generated (and overwritten) inside your `themes/main/css/` directory.

The original `bootstrap.min.css` will automatically get replaced by your customized and compiled Bootstrap version.


### Compiling own CSS

The `run-script watch` will also monitor and compile your own SCSS file named `style.scss` located at `themes/main/scss/` into `themes/main/css/`.
Your existing `themes/main/css/style.css` (if any) will be overwritten.


## License

See [License](LICENSE)

Copyright (c) 2024, minimalic.com - Sebastian Finke
All rights reserved.

