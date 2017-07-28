<?php

namespace WPModular\Modules\L10n;

use WPModular\Foundation\Modules\Module;

class L10n extends Module
{
    public function loadPluginLanguageDomain()
    {
        load_plugin_textdomain(
            wp_service()->getTextDomain(),
            false,
            wp_service()->getPluginName() . DIRECTORY_SEPARATOR . 'languages'
        );
    }
}