<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  private int $dbQueryCount = 0;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // \Illuminate\Support\Facades\DB::beforeExecuting(
        //   function($query,$params){
        //     //$this->dbQueryCount++;
        //      echo '  =!!!'.++$this->dbQueryCount.'!!!=  '.$query ;
        //     });

        Gate::define('cars', function ($user) {
            return ($user->id === 4);
        });
        // Route::bind('modelType', function (string $value) {
        //     dd('serv', $value, get_declared_classes());
        //     return ;
        // });
    }
}
