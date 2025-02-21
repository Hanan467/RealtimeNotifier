<?php

use PHPUnit\Framework\TestCase;
use Hanan467\RealtimeNotifier\Events\NotificationEvent;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Event;

class NotificationSentTest extends \Orchestra\Testbench\TestCase

{
    public function testNotificationSent()
    {
        event(new NotificationEvent('Hello from Hanan'));

    }
}
