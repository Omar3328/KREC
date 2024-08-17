<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Auth\MongoUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // Puedes omitir esta línea si no estás utilizando políticas.
        // $this->registerPolicies();

        Auth::provider('custom', function ($app, array $config) {
            return new MongoUserProvider($app['hash'], $config['model']);
        });
    }
}
