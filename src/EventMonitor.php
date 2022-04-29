<?php
namespace Highjin\EventMonitor;

use Napopravku\Events\EventJob;
use Highjin\EventMonitor\Events\DumpDataEvent;
use Napopravku\Events\QueueableEvent;

class EventMonitor
{
    public static function dispatch(QueueableEvent $event)
    {
        $job = new EventJob($event);
        $job->onQueue(config('event-monitor.queue'));
        dispatch($job);
    }
}