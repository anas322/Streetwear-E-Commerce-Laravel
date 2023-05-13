<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SkuValueSeeder;
use Database\Seeders\ProductImageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UserSeeder::class,
        ProductSeeder::class,
        SkuValueSeeder::class,
        ProductImageSeeder::class,
    ]);

    }
}
