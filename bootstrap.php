<?php

/* Standard define. */
define('PLUGIN_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

/* Load the composer autoloader */
require_once(PLUGIN_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

/* Create an application context and initialize it, loading declared services */
$GLOBALS['appCtx'] = new \WPModular\ApplicationContext\ApplicationContext(PLUGIN_PATH);
$GLOBALS['appCtx']->bootstrap();