<?php
/* General Configurations for the Plugin */
return array(
    'plugin_slug' => 'wp-modular-boilerplate',
    'plugin_name' => 'wpm',
    'version' => '1.0.0',
    'cache' => array(
        'namespace' => 'wpm',
        'ttl' => 0,
        'path' => 'cache',
        'expires' => 90 /* Minutes */
    ),
    'l10n' => array(
    	'path' => 'languages'
    ),
    'view' => array(
        'supported_formats' => array(
            'html', 'twig', 'php'
        ),
        'path' => 'views'
    ),
);
