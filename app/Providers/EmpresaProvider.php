<?php

namespace App\Providers;

use View;
use App\Models\Empresa;
use Illuminate\Support\ServiceProvider;

class EmpresaProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.app', function($view)
        {
            $empresa = Empresa::take(1)->first();
            $view->with('empresa', $empresa);
        });
    }
}
