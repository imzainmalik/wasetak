<?php

namespace App\Providers;
use App\Models\User;

use Illuminate\Pagination\Paginator;
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
        //
        $all_user_arr = User::where('is_active', 1)->pluck('username')->toArray();
        config(['app.all_user_arr' => $all_user_arr]);
        Paginator::useBootstrap();
    }
}
