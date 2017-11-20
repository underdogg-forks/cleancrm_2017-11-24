<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapAdminRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }


    /**
     * Define the "admin" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        /*        Route::group([
                    //'middleware' => 'staff',
                    'namespace'  => $this->namespace,
                ], function ($router) {
                    require base_path('Modules/Core/Routes/adminRoutes.php');
                });*/
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            //require base_path('Modules/Core/Routes/apiRoutes.php');
        });
    }

    /**
     * Define the "staff" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapStaffRoutes()
    {
        /*        Route::group([
                    'middleware' => 'staff',
                    'namespace' => 'Modules\Core\Http\Controllers',
                    //'prefix' => 'staffpanel',
                ], function ($router) {
                    require base_path('Modules/Core/Routes/staffRoutes.php');
                });*/
    }
}
