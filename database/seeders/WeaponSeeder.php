<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weapons')->insert([
            'alias' => 'Mjolnir',
            'form' => 'Hammer',
            'damage' => 100,
        ]);
        DB::table('weapons')->insert([
            'alias' => 'Shield',
            'form' => 'Round',
            'damage' => 50,
        ]);
        DB::table('weapons')->insert([
            'alias' => 'Batarang',
            'form' => 'Boomerang',
            'damage' => 75,
        ]);
        DB::table('weapons')->insert([
            'alias' => 'Heat Vision',
            'form' => 'Laser',
            'damage' => 90,
        ]);
    }
}
