<?php

namespace WPModular\ModuleProviders;

use WPModular\Foundation\Modules\ModuleProvider;

class DefaultModuleProvider extends ModuleProvider
{
    public function register()
    {}

    public function usesNamespace()
    {
        return 'WPModular\\Modules';
    }

    public function usesFolder()
    {
        return $this->app->getRootPath() . DIRECTORY_SEPARATOR . 'modules';
    }
}