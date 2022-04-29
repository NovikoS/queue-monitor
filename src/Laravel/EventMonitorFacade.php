<?php

namespace Highjin\EventMonitor\Laravel;

use Illuminate\Support\Facades\Facade;
use Highjin\EventMonitor\EventMonitor;

class EventMonitorFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return EventMonitor::class;
    }
}