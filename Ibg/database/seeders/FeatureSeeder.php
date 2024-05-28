<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        DB::table('features')->insert([
            ['name' => 'Waterproof'],
            ['name' => 'Breathable'],
            ['name' => 'Insulated'],
            ['name' => 'Quick Dry'],
            ['name' => 'Windproof'],
            ['name' => 'UV Protection'],
        ]);
    }
}
