<?php
 
namespace App\Providers;
 
// use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\MenuComposer;
use Illuminate\View\View;
 
class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
       
    }

    public function boot(): void
    {
        // Facades\View::composer('header',MenuComposer::class);
        view()->composer('header', MenuComposer::class);
    }
}