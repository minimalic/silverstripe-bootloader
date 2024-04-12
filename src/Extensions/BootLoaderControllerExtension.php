<?php

namespace minimalic\BootLoader\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Control\Director;
use SilverStripe\View\Requirements;

class BootLoaderControllerExtension extends Extension {

    public function onBeforeInit()
    {
        // Load the minified Bootstrap JS
        Requirements::javascript('minimalic/silverstripe-bootloader: client/dist/js/bootstrap.bundle.min.js', ["async" => true,]);

        // Get custom themed Bootstrap CSS path
        $base = Director::baseFolder();
        $themedBootstrapPath = $base . '/themes/main/css/bootstrap-custom.css';

        // Check if the custom compiled Bootstrap CSS file exists, else load the minified Bootstrap CSS
        if (file_exists($themedBootstrapPath)) {
            Requirements::css('themes/main/css/bootstrap-custom.css');
        } else {
            Requirements::css('minimalic/silverstripe-bootloader: client/dist/css/bootstrap.min.css');
        }
    }
}
