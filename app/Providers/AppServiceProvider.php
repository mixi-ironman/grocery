<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();
        //View composer
        // view()->composer('*',function($view){
        //     $view->with([
        //         'categoryList' => Category::where('parent_id', 0)->get(),
        //         'carts' => session()->get('cart',[])
        //     ]);
        // });
    }
}
