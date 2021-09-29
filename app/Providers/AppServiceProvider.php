<?php

namespace App\Providers;


use App\Services\Logging\DebugRequestLogger;
use App\Services\Logging\ProductionRequestLogger;
use App\Services\Logging\RequestLoggerInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RequestLoggerInterface::class, function(){

          if($this->app->environment('local')){

           return $this->app->make(ProductionRequestLogger::class);

         }

            return $this->app->make(DebugRequestLogger::class);

          });
          
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
