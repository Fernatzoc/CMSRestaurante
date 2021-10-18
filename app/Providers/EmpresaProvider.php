<?php

namespace App\Providers;

use View;
use App\Models\Empresa;
use Illuminate\Support\Facades\DB;
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
        View::composer(['layouts.app', 'frontend.index', 'frontend.conocenos', 'frontend.menu', 'frontend.contacto'], function($view)
        {
            $empresa = Empresa::take(1)->first();
            $view->with('empresa', $empresa);
        });

        View::composer(['layouts.app'], function($view)
        {
            $horarios = DB::table('horarios')->get();
            $view->with('horarios', $horarios);
        });
    }
}
