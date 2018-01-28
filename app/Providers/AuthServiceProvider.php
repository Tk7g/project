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
        $gate->define('admin-access', Function ($user){
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
    }
}
