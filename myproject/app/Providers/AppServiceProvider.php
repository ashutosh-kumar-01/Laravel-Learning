<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // importing view class from the 

class AppServiceProvider extends ServiceProvider
{
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
        view::share(
            ['university'=>'Lovely Professional University'],
            ['link'=>'https://www.lpu.in/'],
            ['gst'=>'GST is applicable on all the courses of LPU']
        );
    }
}
