<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
         // Sử dụng View Composer để gắn biến $showdanhmuc vào tất cả các view
         View::composer('*', function ($view) {
            $showdanhmuc =  DB::table('danh_muc_san_pham')->get();;
            $view->with('showdanhmuc', $showdanhmuc);
        });
    }
}
