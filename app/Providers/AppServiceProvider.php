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
use App\Repositories\Interfaces\DocumentoRepositorioInterface;
use App\Repositories\DocumentoRepositorio;
use App\Services\FileUploadService;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FileUploadService::class, function ($app) {
            return new FileUploadService();
        });
        $this->app->bind(TipoPersonaRepositorioInterface::class, TipoPersonaRepositorio::class);
        $this->app->bind(PersonaRepositorioInterface::class, PersonaRepositorio::class);
        $this->app->bind(CampañaRepositorioInterface::class, CampañaRepositorio::class);
        $this->app->bind(VoluntariadoRepositorioInterface::class, VoluntariadoRepositorio::class);
        $this->app->bind(DocumentoRepositorioInterface::class, DocumentoRepositorio::class);
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
