<?php 
namespace App\Providers;

use App\Models\User;
use Exception;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use WPINT\Core\Foundation\ServiceProvider;

class WPAuthServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {

    }

    /**
     * Bootstrap any application service
     *
     * @return void
     */
    public function boot(): void
    {   
    
        // Auth::resolveUsersUsing(function(){
        //     if(is_user_logged_in()) return User::find(get_current_user_id());
        // });

        // Gate::define('super-admin', function(User $user){
        //     return is_super_admin($user->ID);
        // });

    }


}