<?php

namespace App\Providers;

use App\Models\Bylaw;
use App\Models\WebsiteSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Company;


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
     
        // View::composer('*', function ($view) {
        //     View::share('ws', WebsiteSetting::first());
        // });

        View::composer('*', function ($view) {

                $data =  Company::first();
                if($data){
                    $view->with('company',$data);
                }else{
                    $view->with('company',false);
                }

                $bylaws =  Bylaw::latest()->get();
                if($data){
                    $view->with('bylaw',$bylaws);
                }else{
                    $view->with('bylaw',false);
                }


            });
        Paginator::useBootstrap();
    }
}
