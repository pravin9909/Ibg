<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WashCareSeeder extends Seeder
{
    public function run()
    {
        DB::table('wash_cares')->insert([
            ['name' => 'Machine Wash'],
            ['name' => 'Hand Wash'],
            ['name' => 'Dry Clean Only'],
            ['name' => 'Do Not Bleach'],
            ['name' => 'Tumble Dry'],
            ['name' => 'Iron Low Heat'],
        ]);
    }
}
