<?php
/* Core Services of WP Modular Framework */
return array(
    'config' => \WPModular\Config\ConfigService::class,
    'cache' => \WPModular\Cache\CacheService::class,
    'env' => \WPModular\Environment\EnvironmentService::class,
    'filesystem' => \WPModular\Filesystem\FilesystemService::class,
    'l10n' => \WPModular\L10n\L10nService::class,
    'url' => \WPModular\Support\Url\UrlService::class,
    'view' => \WPModular\View\ViewService::class,
    'wp' => \WPModular\Wordpress\WordpressService::class,
);