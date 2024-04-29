<?php

namespace App\Providers;

use App\Repository\Accessory\AccessoryRepository;
use App\Repository\Accessory\AccessoryRepositoryInterface;
use App\Repository\Battery\BatteryRepository;
use App\Repository\Battery\BatteryRepositoryInterface;
use App\Repository\engine\EngineRepository;
use App\Repository\engine\EngineRepositoryInterface;
use App\Repository\Filter\FilterRepository;
use App\Repository\Filter\FilterRepositoryInterface;

use App\Repository\order\orderRepository;
use App\Repository\order\orderRepositoryInterface;
use App\Repository\tires\TireRepository;
use App\Repository\tires\TireRepositoryInterface;
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
        $this->app->bind(TireRepositoryInterface::class,TireRepository::class);
        $this->app->bind(EngineRepositoryInterface::class,EngineRepository::class);
        $this->app->bind(BatteryRepositoryInterface::class,BatteryRepository::class);
        $this->app->bind(FilterRepositoryInterface::class,FilterRepository::class);
        $this->app->bind(AccessoryRepositoryInterface::class,AccessoryRepository::class);




        $this->app->bind(orderRepositoryInterface::class,orderRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
