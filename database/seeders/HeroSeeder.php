<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
            'name' => 'Thor',
            'surname' => 'Odinson',
            'birthday_date' => '1970-05-29',
            'weapon_id' => 1,
            'guild_id' => 1,
        ]);
        DB::table('heroes')->insert([
            'name' => 'Steve',
            'surname' => 'Rogers',
            'birthday_date' => '1918-07-04',
            'weapon_id' => 2,
            'guild_id' => 1,
        ]);
        DB::table('heroes')->insert([
            'name' => 'Bruce',
            'surname' => 'wayne',
            'birthday_date' => '1969-12-18',
            'weapon_id' => 3,
            'guild_id' => 2,
        ]);
        DB::table('heroes')->insert([
            'name' => 'Clark',
            'surname' => 'Kent',
            'birthday_date' => '1978-06-18',
            'weapon_id' => 4,
            'guild_id' => 2,
        ]);
    }
}
