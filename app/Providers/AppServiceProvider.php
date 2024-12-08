<?php

namespace App\Providers;

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
    }
}
