<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\Category;

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

        view()->composer('includes.header', function ($view) {
            $products = Product::latest()->get();
            $categories = Category::all();

            $view->with('products', $products);
            $view->with('categories', $categories);
        });
        Schema::defaultStringLength(191);
    }
}
