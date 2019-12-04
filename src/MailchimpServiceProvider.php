<?php

namespace Carburant\Mailchimp;

use DrewM\MailChimp\MailChimp;
use Illuminate\Support\ServiceProvider;

class MailchimpServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/mailchimp.php' => config_path('mailchimp.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/Controllers/MailchimpController.php' => app_path('Http/Controllers/MailchimpController.php'),
        ], 'controllers');

        $this->publishes([
            __DIR__ . '/../views/button.blade.php' => resource_path('views/mailchimp'),
            __DIR__ . '/../views/form.blade.php' => resource_path('views/mailchimp'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../views/js.blade.php' => resource_path('views/mailchimp'),
        ], 'js');

        $this->publishes([
            __DIR__ . '/../translations' => resource_path('lang')
        ], 'translations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/mailchimp.php');

        $this->loadViewsFrom(__DIR__ . '/../views', 'mailchimp');

        $this->loadTranslationsFrom(__DIR__ . '/../translations', 'mailchimp');

        $this->app->singleton('Mailchimp', function($app) {
            return new MailChimp($app->config['mailchimp.api_key']);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/mailchimp.php', 'mailchimp'
        );
    }
}
