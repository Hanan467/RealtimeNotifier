<?php
namespace Hanan467\RealtimeNotifier\Providers;

use Illuminate\Broadcasting\BroadcastServiceProvider;
use Illuminate\Support\ServiceProvider;

class RealtimeNotifierServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->register(BroadcastServiceProvider::class);

        $this->publishes([
            __DIR__ . '/../config/realtime-notifier.php' => config_path('realtime-notifier.php'),
        ], 'config');
    }
}
