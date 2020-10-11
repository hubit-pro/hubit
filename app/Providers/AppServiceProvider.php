<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Master;

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
    public function boot(Master $master)
    {
        // view()->composer('*', function($aboutusMainView){
        //     $aboutusMainView->with('aboutusMain', Master::where('status', true)->where('type', Master::aboutusMain)->latest()->get());
        // });
    }
}
