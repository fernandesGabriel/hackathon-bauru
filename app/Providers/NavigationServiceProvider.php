<?php

namespace Hackathon\Providers;

use Hackathon\Models\Page;
use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeAdminSidebar();
        $this->composeMenu();
    }

    /**
     * Create admin sidebar
     *
     * @return void
     */
    public function composeAdminSidebar()
    {
        view()->composer('admin.blocks.sidebar', function ($view) {

            $view->with('pages', Page::all());

        });
    }

    /**
     * Create admin sidebar
     *
     * @return void
     */
    public function composeMenu()
    {
        view()->composer('blocks.header', function ($view) {

            $view->with('pages', Page::all());

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
