<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\About;
use App\Observers\AboutObserver;
use App\Models\Slider;
use App\Observers\SliderObserver;
use App\Models\Facility;
use App\Observers\FacilityObserver;
use App\Models\Article;
use App\Observers\ArticleObserver;
use App\Models\Client;
use App\Observers\ClientObserver;
use App\Models\Award;
use App\Observers\AwardObserver;
use App\Models\Team;
use App\Observers\TeamObserver;
use App\Models\Service;
use App\Observers\ServiceObserver;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Slider::observe(SliderObserver::class);
        About::observe(AboutObserver::class);
        Facility::observe(FacilityObserver::class);
        Article::observe(ArticleObserver::class);
        Client::observe(ClientObserver::class);
        Award::observe(AwardObserver::class);
        Team::observe(TeamObserver::class);
        Service::observe(ServiceObserver::class);

        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
        
    }
}
