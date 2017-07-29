<?php

namespace WPModular\Modules\CronTask;

use WPModular\Foundation\Modules\Module;

class CronManager extends Module
{
    public function registerEvents()
    {
        foreach(wp_service()->getCronEvents() as $eventName => $eventInterval) {
            list($recurrence, $hour) = array_pad(explode(' @ ', $eventInterval, 2), 2, null);
            $timestamp = (!is_null($hour)) ? (new \DateTime("{$hour}:00", new \DateTimeZone(get_option('timezone_string'))))->getTimestamp() : time();
            wp_schedule_event($timestamp, $recurrence, $eventName);
        }
    }

    public function unregisterEvents()
    {
        foreach(wp_service()->getCronEvents() as $eventName => $eventInterval)
            wp_clear_scheduled_hook($eventName);
    }
}