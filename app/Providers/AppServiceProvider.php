<?php

namespace App\Providers;

use App\Models\User;
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
        Gate::define('create-users', function (User $user) {
            return in_array($user->role->name, ["Admin", "Team Leader"]);
        });
        Gate::define('update-users', function (User $user) {
            return in_array($user->role->name, ["Admin", "Team Leader"]);
        });
        Gate::define('delete-users', function (User $user) {
            return $user->role->name === "Admin";
        });
    }
}
