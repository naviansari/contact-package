<?php

namespace Edutras\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php',
            'contact'
        );
//        $this->publishes([
//            __DIR__.'/resources/views' => resource_path('views/vendor/contact'),
//        ]);
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views'=>resource_path('views/vendor/contact'),
        ]);
    }

    public function register()
    {
//        $this->mergeConfigFrom(
//            __DIR__.'/config/contact.php',
//            'contact'
//        );
    }

}
