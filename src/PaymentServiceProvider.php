<?php

namespace Mdayo\User;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
      
    }


    public function boot()
    {
   
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'payment-migrations');
        
          $this->publishes([
            __DIR__.'/../database/seeders/' => database_path('seeders')
        ], 'payment-seeders');
        
      
    }
}
