<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Role;
use App\Models\Role_user;
use App\Models\Role_permision;
use App\Models\Permision;
use Log;
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

        // Gate::define('admin1',function(User $user){

        //     foreach ($user->roles as $role) {
        //         if($role->ea_title == 'admin1'){
        //             return true;
        //         }else{
        //             return false;
        //         }
        //     }
        // });
        // Gate::define('admin2',function(User $user){
        //     foreach ($user->roles as $role) {
        //         if($role->ea_title=='admin1'){
        //             return true;
        //         }
        //         if($role->ea_title=='admin2'){
        //             return true;
        //         }
        //         if($role->ea_title=='user'){
        //             return false;
        //         }
        //     }
        // });
        // Gate::define('user',function(User $user){
        //     foreach ($user->roles as $role) {
        //         if($role->ea_title=='admin1'){
        //             return true;
        //         }
        //         if($role->ea_title=='admin2'){
        //             return true;
        //         }
        //         if($role->ea_title=='user'){
        //             return true;
        //         }
        //     }
        // });
        


        Gate::define('admin_dashboard',function(User $user,$roles){
            return $user->hasRole([$roles]);
        });
        Gate::define('role_permision',function(User $user,$roles){
            Log::info($roles);
            return $user->hasRole([$roles]);
        });
    }
}
