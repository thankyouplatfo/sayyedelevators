<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Permission
        //Permission::get(['title'])->map(function ($permission) {
        //    Gate::define($permission->title, function ($user) use ($permission) {
        //        return $user->hasAllow($permission->title);
        //    });
        //});

        Gate::define('cms-admin',function($user){
            return $user->isSuperAdmin();
        });
    }
}
