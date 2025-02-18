<?php
namespace Hanan\RealtimeNotifier\Providers;

use Illuminate\Support\ServiceProvider;

class RealtimeNotifierServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
      
        $this->publishes([
            __DIR__ . '/../config/realtime-notifier.php' => config_path('realtime-notifier.php'),
        ], 'config');
    }
}
