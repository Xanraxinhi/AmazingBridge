<?php

namespace App\Providers;

use App\Bridge;
use App\Country;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $data = [];
            $data['countries'] = Country::all();
            $data['bridges'] = Bridge::with(['photos','parameter'])->latest()->get();
            $view->with($data);
        });
    }
}
