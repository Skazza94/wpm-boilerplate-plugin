<?php
/* General Configurations for services */
return array(
    'env' => array(
        'type' => 'dot'
    ),
    'cache' => array(
        'namespace' => 'wpm',
        'ttl' => 0,
        'path' => 'cache'
    ),
    'view' => array(
        'supported_formats' => array(
            'html', 'twig', 'php'
        ),
        'path' => 'views'
    ),
    'url' => array(
        'type' => 'wp'
    )
);