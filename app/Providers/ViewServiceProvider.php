<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\Team;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $views = [
            "panel.account.profile",
            "panel.user*",
        ];

        View::composer($views, function ($view) {
            $view->with([
                "roles" => Role::all(),
                "teams" => Team::all(),
            ]);
        });
    }
}
