<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Ad;
use App\Models\User;
use App\Policies\Admin\AdminPolicy;
use App\Policies\AdPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => AdminPolicy::class,
        Ad::class => AdPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
