<?php

namespace CodeFlix\Providers;

use CodeFlix\Repositories\OrderRepository;
use CodeFlix\Repositories\OrderRepositoryEloquent;
use CodeFlix\Repositories\PayPalWebProfileRepository;
use CodeFlix\Repositories\PayPalWebProfileRepositoryEloquent;
use CodeFlix\Repositories\PlanRepository;
use CodeFlix\Repositories\PlanRepositoryEloquent;
use CodeFlix\Repositories\SubscriptionRepository;
use CodeFlix\Repositories\SubscriptionRepositoryEloquent;
use CodeFlix\Repositories\UserRepository;
use CodeFlix\Repositories\UserRepositoryEloquent;
use CodeFlix\Repositories\CategoryRepository;
use CodeFlix\Repositories\CategoryRepositoryEloquent;
use CodeFlix\Repositories\SerieRepository;
use CodeFlix\Repositories\SerieRepositoryEloquent;
use CodeFlix\Repositories\VideoRepository;
use CodeFlix\Repositories\VideoRepositoryEloquent;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(CategoryRepository::class, CategoryRepositoryEloquent::class);
        $this->app->bind(SerieRepository::class, SerieRepositoryEloquent::class);
        $this->app->bind(VideoRepository::class, VideoRepositoryEloquent::class);
        $this->app->bind(PlanRepository::class, PlanRepositoryEloquent::class);
        $this->app->bind(OrderRepository::class, OrderRepositoryEloquent::class);
        $this->app->bind(SubscriptionRepository::class, SubscriptionRepositoryEloquent::class);
        $this->app->bind(PayPalWebProfileRepository::class, PayPalWebProfileRepositoryEloquent::class);
    }
}
