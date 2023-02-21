<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;
use App\Repositories\Interfaces\TipoPersonaRepositorioInterface;
use App\Repositories\TipoPersonaRepositorio;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TipoPersonaRepositorioInterface::class, TipoPersonaRepositorio::class);
        $this->app->bind(PersonaRepositorioInterface::class, PersonaRepositorio::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //Paginator::useBootstrap();
    }
}
