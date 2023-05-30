<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        // dapat menambahkan event listener, middleware, dependency injection, observer model, dan custom route

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * memetakan rute dalah laravel
     * Pemetaan rute biasanya dilakukan terpisah untuk rute admin, rute API, dan rute web.
     * @return void
     */
    public function map()
    {
        $this->mapAdminRoutes();
        //  memetakan rute yang terkait dengan area administrasi (admin)
        // manajemen pengguna, manajemen konten, dan sebagainya
        $this->mapApiRoutes();
        // memetakan rute yang terkait dengan API
        $this->mapWebRoutes();
         // memetakan rute yang terkait dengan tampilan web (frontend)

        //
    }

    // memetakan rute admin
    protected function mapAdminRoutes()
    {
        // web digunakan untuk menangani fitur-fitur dasar seperti session dan cookies
        // auth memastikan bahwa pengguna harus sudah melakukan autentikasi sebelum mengakses rute ini
        // pengguna harus memiliki peran (role) sebagai admin untuk mengakses rute ini.
        Route::middleware('web', 'auth', 'role:admin')
        //  Jadi, semua rute dalam file routes/admin.php akan diawali dengan /admin.
        // ame('admin.'): Ini menentukan awalan nama (name prefix) yang akan digunakan untuk semua nama rute dalam grup admin
            ->prefix('admin')
            // name('admin.'): Ini menentukan awalan nama (name prefix) yang akan digunakan untuk semua nama rute dalam grup admin
            ->name('admin.')
            // menentukan namespace (ruang nama) untuk controller yang terkait dengan grup rute admin. Dalam contoh ini, namespace yang digunakan adalah $this->namespace . '\admin', yang akan menghasilkan namespace seperti App\Http\Controllers\admin. Dengan demikian, file routes/admin.php diharapkan menggunakan controller dengan namespace tersebut.
            ->namespace($this->namespace . '\admin')
            // menentukan file yang berisi rute-rute admin. Dalam contoh ini, file tersebut adalah routes/admin.php.
            ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    // memetakan rute web (frontend)
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            // menentukan file yang berisi rute-rute web. Dalam contoh ini, file tersebut adalah routes/web.php.
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    //
    protected function mapApiRoutes()
    {
        // awalan (prefix) URL yang digunakan untuk semua rute dalam grup rute API. Dalam contoh ini, awalan URL adalah /api. Jadi, semua rute dalam file routes/api.php akan diawali dengan /api.
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
