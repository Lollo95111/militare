<?php

namespace App\Providers;

use App\Models\Gender;
use App\Models\caliber;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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


        if (Schema::hasTable('categories')) {

            $productCategories = Category::all();

            View::share(compact('productCategories'));

        }


        if (Schema::hasTable('genders')) {

            $productGenders = Gender::all();

            View::share(compact('productGenders'));

        }


        if (Schema::hasTable('calibers')) {

            $productCalibers = caliber::all();

            View::share(compact('productCalibers'));

        }



        if (Schema::hasTable('products')) {
            $products = Product::all();
            View::share('products', $products);
        }

        Paginator::useBootstrapFive();
    }
}
