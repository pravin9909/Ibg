<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatternSeeder extends Seeder
{
    public function run()
    {
        DB::table('patterns')->insert([
            ['name' => 'Solid'],
            ['name' => 'Striped'],
            ['name' => 'Checked'],
            ['name' => 'Polka Dot'],
            ['name' => 'Paisley'],
            ['name' => 'Floral'],
        ]);
    }
}
