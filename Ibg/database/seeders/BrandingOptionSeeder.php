<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandingOptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('branding_options')->insert([
            ['name' => 'Printed'],
            ['name' => 'Embroidered'],
            ['name' => 'Woven Label'],
            ['name' => 'Heat Transfer'],
            ['name' => 'Rubber Patch'],
        ]);
    }
}
