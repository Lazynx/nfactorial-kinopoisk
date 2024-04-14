<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
      view()->composer('*', function ($view) {
        if (auth()->check()) {
          $view->with('loggedInUser', auth()->user());
        }
      });
    }
}
