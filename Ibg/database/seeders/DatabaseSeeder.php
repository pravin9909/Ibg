<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ColorSeeder::class,
            FabricOptionSeeder::class,
            WashCareSeeder::class,
            FeatureSeeder::class,
            GenderSeeder::class,
            BrandingOptionSeeder::class,
            PatternSeeder::class,
        ]);
    }
}
