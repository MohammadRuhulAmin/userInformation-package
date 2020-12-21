<?php

namespace TeamBravo\userInformation;
use Illuminate\Support\ServiceProvider;
class userInformationServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views',"userInformation");
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/AppUserInfromation.php','userInformation');
        $this->publishes([__DIR__.'/config/AppUserInfromation.php'=>config_path('AppUserInfromation.php.php'),
		]);
        


    }
    public function register(){


    }



}