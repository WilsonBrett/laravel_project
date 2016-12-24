<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Wherever the interface is injected (controllers) the repository gets injected instead.
        //Don't have to update controller code if decide to later swap out the orm or the db.
        //Update bind statement here with newly created repository (implementation) - brett.
        $this->app->bind('App\Interfaces\UsersInterface', 'App\Repositories\UsersRepository');
        $this->app->bind('App\Interfaces\ClientsInterface', 'App\Repositories\ClientsRepository');
        $this->app->bind('App\Interfaces\DepartmentsInterface', 'App\Repositories\DepartmentsRepository');
        $this->app->bind('App\Interfaces\TitlesInterface', 'App\Repositories\TitlesRepository');
        $this->app->bind('App\Interfaces\EmployeesInterface', 'App\Repositories\EmployeesRepository');
    }
}
