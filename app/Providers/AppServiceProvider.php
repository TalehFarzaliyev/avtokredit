<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Language;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


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
   public function boot(Request $request)
   {
      Schema::defaultStringLength(191);

       $languages = Language::where('status', 1)->get();
//
//        //- $current_language = Language::where('code', $request->segment(1))->first()->name;
        // $current_language = Language::where('code', 'az')->first()->name;
         View::share('languages', $languages);
        // View::share('current_language', $current_language);
        // app()->setLocale($request->segment(1,'az'));
        // app()->setLocale('az');
//
    }
}
