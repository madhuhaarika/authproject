<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
         // Define a gate for admin-only actions
         Gate::define('admin-only', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('staff-only', function ($user) {
            return $user->hasRole('staff');
        });

        // Define a gate for student-only actions
        Gate::define('student-only', function ($user) {
            return $user->hasRole('student');
        });

    }
}
