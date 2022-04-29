<?php
namespace Highjin\EventMonitor\Laravel;

use Illuminate\Support\ServiceProvider;
use Highjin\EventMonitor\EventMonitor;

class EventMonitorServiceProvider extends ServiceProvider
{
    public function __construct($dispatcher = null)
    {
        parent::__construct($dispatcher);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/event-monitor.php' => config_path('event-monitor.php'),
        ]);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/event-monitor.php', 'event-monitor'
        );
        $this->app->bind(EventMonitor::class);
    }
}