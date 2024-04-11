<?php

namespace minimalic\BootLoader\Extensions;

use SilverStripe\Core\Extension;

use SilverStripe\View\Requirements;

class BootLoaderControllerExtension extends Extension {

    // public function onAfterInit()
    public function onBeforeInit()
    // public function init()
    {
        // parent::init();
        // Requirements::set_write_js_to_body(false);

        Requirements::javascript('minimalic/silverstripe-bootloader: client/dist/js/bootstrap.bundle.min.js', ["async" => true,]);

        Requirements::css('minimalic/silverstripe-bootloader: client/dist/css/bootstrap-custom.css');

        // Requirements::set_force_js_to_bottom(true);
    }
}
