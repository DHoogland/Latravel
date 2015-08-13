<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config(array(
            'twigbridge' => array(
                'extensions' => array(
                    'enabled' => array(
                        'TwigBridge\Extension\Loader\Facades',
                        'TwigBridge\Extension\Loader\Filters',
                        'TwigBridge\Extension\Loader\Functions',
                        'TwigBridge\Extension\Laravel\Auth',
                        'TwigBridge\Extension\Laravel\Config',
                        'TwigBridge\Extension\Laravel\Input',
                        'TwigBridge\Extension\Laravel\Session',
                        'TwigBridge\Extension\Laravel\String',
                        'TwigBridge\Extension\Laravel\Translator',
                        'TwigBridge\Extension\Laravel\Url',

                        'TwigBridge\Extension\Laravel\Form',
                        'TwigBridge\Extension\Laravel\Html',
                    ),
                    'facades' => array(
                    ),
                    'functions' => array(
                        'dd',
                    ),
                ),
            ),
        ));
    }
}
