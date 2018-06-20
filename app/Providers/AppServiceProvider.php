<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\models\thuocs;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('modules/header', function ($view) {
            $data=thuocs::where('ngayhethan','<=',date('Y-m-d'))->get();
            $view->with('notify',$data);
        });
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
