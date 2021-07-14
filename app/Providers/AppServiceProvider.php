<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if (!defined('ADMIN')) {
            define('ADMIN', config('variables.APP_ADMIN', 'admin'));
        }
        if (!defined('AKADEMIK')) {
            define('AKADEMIK', config('variables.APP_AKADEMIK', 'akademik'));
        }
        if (!defined('MAHASISWA')) {
            define('MAHASISWA', config('variables.APP_MAHASISWA', 'mahasiswa'));
        }
        if (!defined('JURUSAN')) {
            define('JURUSAN', config('variables.APP_JURUSAN', 'jurusan'));
        }
        require_once base_path('resources/macros/form.php');
        Schema::defaultStringLength(191);
    }
}
