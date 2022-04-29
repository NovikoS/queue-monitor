<?php

namespace Highjin\EventMonitor\Traits;

use Highjin\EventMonitor\EventMonitor;
use Highjin\EventMonitor\Events\DumpDataEvent;
use Highjin\EventMonitor\Interfaces\BuilderInterface;
use Napopravku\Events\QueueableEvent;

trait EventBuilderTrait
{
    public function build(QueueableEvent $event){
        $data = parent::build($event);
        $dataEvent = new DumpDataEvent($data);
        EventMonitor::dispatch($dataEvent);
    }
}