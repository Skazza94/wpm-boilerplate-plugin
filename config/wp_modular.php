<?php
/* General Configurations for the Plugin */
return [
    'plugin_slug' => 'wp-modular-boilerplate',
    'plugin_name' => 'wpm',
    'version' => '1.0.0',
    'cache' => [
        'namespace' => 'wpm',
        'ttl' => 0,
        'path' => 'cache',
        'expires' => 90 /* Minutes */
    ],
    'l10n' => [
        'path' => 'languages'
    ],
    'view' => [
        'supported_formats' => [
            'html', 'twig', 'php'
        ],
        'path' => 'views'
    ],
];
