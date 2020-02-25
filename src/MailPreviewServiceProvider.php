<?php

namespace Goodwork\MailPreview;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class MailPreviewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../dist' => public_path('js/plugins/mail-preview'),
            __DIR__.'/views/plugin-scripts' => resource_path('views/plugin-scripts/'),
        ], 'goodwork-mail-preview');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(storage_path('email-previews'), 'mail-preview-html');
        $this->loadViewsFrom(__DIR__.'/views', 'mail-preview');
        if (! File::exists(storage_path('email-previews'))) {
            File::makeDirectory(storage_path('email-previews'));
        }
    }
}
