<?php

use PHPUnit\Framework\TestCase;
use Hanan\RealtimeNotifier\Events\NotificationEvent;
use Illuminate\Support\Facades\Broadcast;

class NotificationSentTest extends TestCase
{
    public function testEventBroadcastsOnCorrectChannel()
    {
        $event = new NotificationEvent('test message');

        $this->assertInstanceOf(\Illuminate\Contracts\Broadcasting\ShouldBroadcastNow::class, $event);

        // Check the broadcast channel
        $this->assertEquals('realtime-notifications', $event->broadcastOn()->name);
    }
}
