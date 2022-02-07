<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
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
     * Register any authentication / authorization services. MY GATES DONT WORK FOR UNKNOWN REASONS
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('own_gallery',function ($id){
            return Auth::user()->id === $id;
        });
    }
}
