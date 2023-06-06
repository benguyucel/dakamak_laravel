<?php

namespace App\Providers;

use App\Models\BestValue;
use App\Models\OurService;
use App\Models\SiteSetting;
use App\Models\StaticContent;
use App\Models\SystemLanguage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['front.partials.header', 'back.ourservice.show', 'back.bestvalues.show', 'back.staticcontents.about_content','back.staticcontents.tagline'], function ($view) {
            $view->with('languages', SystemLanguage::where('status', 1)->get());
        });
        View::composer(['back.partials.left-side', 'front.home'], function ($view) {
            $view->with(['ourservice_items' => OurService::all(), 'bestvalue_items' => BestValue::all()]);
        });
        View::composer(['front.home', 'front.about', 'back.staticcontents.about_content', 'back.partials.left-side','front.partials.footer'], function ($view) {
            $view->with(['staticContent' => StaticContent::where('id',1)->get()->first()]);
        });
        View::composer(['back.sitesettings.generalsetting.create', 'front.partials.header', 'front.partials.footer','auth.login'], function ($view) {
            $view->with(['generalSetting' => SiteSetting::where('id', 1)->first()]);
        });        
    }
}
