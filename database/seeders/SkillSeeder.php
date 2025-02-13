<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            'alias' => 'Mordisco',
            'type' => 'Salvaje',
            'damage' => 100,    
            'range' => 10,
            'hero_id' => 1,
        ]);
        DB::table('skills')->insert([
            'alias' => 'Zarpazo',
            'type' => 'Salvaje',
            'damage' => 50,
            'range' => 5,
            'hero_id' => 2,
        ]);
    }
}
