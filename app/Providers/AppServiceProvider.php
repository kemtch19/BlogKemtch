<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap(); /* con esto lo que le indicamos a laravel es que al paginator utilizalo con los estilos de bootstrap además de ponerle el cdn de bootstrap en la página donde queramos ponerselo. Pero si no lo deseamos solamente lo quitamos y colocamos solamente le cdn de tailwind */
    }
}
