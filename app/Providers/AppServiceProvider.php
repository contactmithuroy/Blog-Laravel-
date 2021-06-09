<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;

use View; // two option are work
// use Illuminate\Support\Facades\View;


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
        $categories = Category::take(5)->get();
        view::share('categories', $categories);
    }
}
