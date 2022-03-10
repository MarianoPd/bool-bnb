<?php

namespace App\Providers;

use Braintree;
use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway([
                'environment' => 'sandbox',
                'merchantId' => '2x944ghfx9rf4dtt',
                'publicKey' => 'j7jd5mfm66gs3tdx',
                'privateKey' => '7c69906f4f6b8f08dae59537e12cd405'
            ]);
        });
        
        
    }
}
