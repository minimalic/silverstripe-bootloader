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

If you need to inject your own Bootstrap variables and overrides, you should start with installing `sass`, `nodemon` and `postcss` using `npm`.
Once installed, you can compile new customized Bootstrap CSS file using:

```sh
cd vendor/minimalic/silverstripe-bootloader/client/src/
npm run-script watch
```
or alternatively:

```sh
npm --prefix ./vendor/minimalic/silverstripe-bootloader/client/src/ run-script watch
```

Compiling requires these two files in your directory:
`_bs-variables.scss`
`_bs-variables-end.scss`

The first one will be loaded at the beginning right after `@import "functions";` and the second one after all other Bootstrap modules.


The `run-script watch` will also monitor and compile your own SCSS file named `style.scss` located at `themes/main/scss/` into `themes/main/css/`.
Warning: your existing (if any) `themes/main/css/style.css` will be overwritten!


## License

See [License](LICENSE.md)

Copyright (c) 2024, minimalic.com - Sebastian Finke
All rights reserved.

