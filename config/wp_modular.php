<?php
/* General Configurations for services */
return array(
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
    )
);