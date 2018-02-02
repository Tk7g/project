<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //хэрэглэгч админ мөн эсэхийг шалгах
        $gate->define('admin-access', function ($user){
            // dd($user->roles);
            foreach ($user->roles as $role) {
                if ($role->code == 'web admin') {
                    return true;
                }
            }
            return false;
        });

        // хэрэглэгч Author мөн эсэхийг шалгах
        $gate->define('ppeadmin-access', function ($user){
            foreach ($user->roles as $role) {
                if ($role->code == 'ppe admin'){
                    return true;
                }
            }
            return false;
        });
        // хэрэглэгч user мөн эсэхийг шалгах
        $gate->define('user-access', function ($user){
            foreach ($user->roles as $role) {
                if ($role->code == 'user'){
                    return true;
                }
            }
            return false;
        });
        Gate::define('role', function ($user, $code = null) {
            if ($code == null) { $code = \Route::currentRouteName(); }
                return $user->hasPermission($code);
        });
    }
}
