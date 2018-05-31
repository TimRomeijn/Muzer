<?php

namespace App\Providers;

use App\BandProfile;
use App\MusicianProfile;
use App\StageProfile;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

//use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Schema::defaultStringLength(191);
        //compose all the views....
        view()->composer('*', function ($view)
        {
            $mprofileAccounts =  MusicianProfile::all()->where('user_id', '=' , Auth::id() );
            $bprofileAccounts =  BandProfile::all()->where('user_id', '=' , Auth::id() );
            $sprofileAccounts =  StageProfile::all()->where('user_id', '=' , Auth::id() );

            $profileAccounts = array_collapse([$mprofileAccounts, $bprofileAccounts, $sprofileAccounts]);

            //...with this variable
            $view->with('profileAccounts', $profileAccounts);
        });

//        view()->composer('*', function ($view2)
//        {
//              $currentAccounts = [1=> 'musicianprofile', 2=> 'bandprofile', 3=> 'stageprofile'];
//
//            //...with this variable
//            $view2->with('currentAccounts', $currentAccounts);
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
