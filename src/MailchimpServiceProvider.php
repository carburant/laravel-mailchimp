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
