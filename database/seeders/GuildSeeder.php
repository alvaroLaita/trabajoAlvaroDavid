<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guilds')->insert([
            'name' => 'The Avengers',
            'created' => '2025-02-13',
            'icon' => 'avengers.png',
            'rank' => 1,
        ]);
        DB::table('guilds')->insert([
            'name' => 'Justice League',
            'created' => '2025-02-13',
            'icon' => 'justice_league.png',
            'rank' => 2,
        ]);

    }
}
