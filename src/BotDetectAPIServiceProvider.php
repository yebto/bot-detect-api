<?php

namespace Yebto\BotDetectAPI;

use Illuminate\Support\ServiceProvider;

class BotDetectAPIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/yebto-bot-detect.php', 'yebto-bot-detect');

        $this->app->singleton('yebto-bot-detect', function () {
            return new BotDetectAPI(config('yebto-bot-detect'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/yebto-bot-detect.php' => config_path('yebto-bot-detect.php'),
        ], 'yebto-bot-detect-config');
    }
}
