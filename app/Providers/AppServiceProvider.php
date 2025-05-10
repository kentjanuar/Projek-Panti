<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Gate;
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
        RedirectIfAuthenticated::redirectUsing(fn()=>route('admin'));
        Gate::define('insert-admin', function(User $user) {
            return $user->status == 0;
        });

        Gate::define('show-admin', function(User $user) {
            return $user->status == 0;
        });

        Gate::define('delete-admin', function(User $user) {
            return $user->status == 0;
        });

        Gate::define('update-admin', function(User $user) {
            return $user->status == 0;
        });
    }
}
