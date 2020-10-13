<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Master;
use App\Models\GallaryCategory;
use App\Models\GallarySubCategory;

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
    public function boot(Master $master, GallaryCategory $gallaryCategory, GallarySubCategory $gallarySubCategory)
    {

        view()->composer('*', function($gallaryCategoryView){
            $gallaryCategoryView->with('globalGallaryCategories', GallaryCategory::where('status', true)->get());
        });
        view()->composer('*', function($gallarySubCategoryView){
            $gallarySubCategoryView->with('globalGallarySubCategories', GallarySubCategory::where('status', true)->get());
        });
    }
}
