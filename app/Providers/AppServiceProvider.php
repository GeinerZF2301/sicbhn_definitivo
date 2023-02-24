<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;
use App\Repositories\Interfaces\TipoPersonaRepositorioInterface;
use App\Repositories\TipoPersonaRepositorio;
use App\Repositories\Interfaces\CampañaRepositorioInterface;
use App\Repositories\CampañaRepositorio;
use App\Repositories\Interfaces\VoluntariadoRepositorioInterface;
use App\Repositories\VoluntariadoRepositorio;



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
        $this->app->bind(CampañaRepositorioInterface::class, CampañaRepositorio::class);
        $this->app->bind(VoluntariadoRepositorioInterface::class, VoluntariadoRepositorio::class);
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
