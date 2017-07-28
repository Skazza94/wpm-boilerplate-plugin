<?php

namespace WPModular\Modules\CronTask;

use WPModular\Foundation\Modules\Module;

class CronManager extends Module
{
    public function registerEvents()
    {
        foreach(wp_service()->getCronEvents() as $eventName => $eventInterval)
            wp_schedule_event(time(), $eventInterval, $eventName);
    }

    public function unregisterEvents()
    {
        foreach(wp_service()->getCronEvents() as $eventName => $eventInterval)
            wp_clear_scheduled_hook($eventName);
    }
}