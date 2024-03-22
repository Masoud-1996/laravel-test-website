<?php

namespace App\Providers;

use App\Models\Market\CartItem;
use Illuminate\Support\Facades\Auth;
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
        view()->composer('customer.layouts.header', function ($view) {
            if (Auth::check()) {
            
                $cartItems = CartItem::where('user_id', Auth::user()->id)->get();

                $view->with('cartItems', $cartItems);
            }
        });
    }
}
