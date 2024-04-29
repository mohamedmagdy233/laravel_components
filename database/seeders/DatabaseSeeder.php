<?php

namespace Database\Seeders;

use App\Models\Accessory;
use App\Models\Battery;
use App\Models\Engine;
use App\Models\Filter;
use App\Models\Tire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Tire::class, 50)->create();
        factory(Engine::class, 50)->create();
        factory(Battery::class, 50)->create();
        factory(Accessory::class, 50)->create();
        factory(Filter::class, 50)->create();
    }
}
