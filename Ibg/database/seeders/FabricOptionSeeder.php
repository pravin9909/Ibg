<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FabricOptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('fabric_options')->insert([
            ['name' => 'Cotton'],
            ['name' => 'Polyester'],
            ['name' => 'Wool'],
            ['name' => 'Silk'],
            ['name' => 'Linen'],
            ['name' => 'Denim'],
        ]);
    }
}
