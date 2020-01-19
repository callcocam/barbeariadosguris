<?php

namespace App;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

abstract class AbstractEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    abstract public function setHandler($handler);
}
