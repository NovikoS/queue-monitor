<?php

namespace Highjin\EventMonitor\Events;

use \Napopravku\Events\QueueableEvent;
use Highjin\EventMonitor\AbstractClasses\AbstractQueueableEvent;

class DumpDataEvent extends AbstractQueueableEvent implements QueueableEvent
{
    public object $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}