<?php

namespace App\Providers;

use App\Models\Destination;
use App\Models\MainPage\Statistic;
use App\Models\Question;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

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
        view()->share(
            'services',
            //            Service::orderBy('id', 'asc')->get());
            Service::orderBy('order', 'asc')->get()
        );

        view()->share(
            'destinationList',
            Destination::orderBy('title', 'asc')->get()->pluck('slug', 'title')
        );

        view()->share('questions', Question::get());

        view()->share('statistics', Statistic::get());
    }
}
