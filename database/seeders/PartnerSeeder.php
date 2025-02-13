<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            'nickname' => 'John',
            'race' => 'Dog',
            'age' => '20',
            'skill_id' => '1',
        ]);
        DB::table('partners')->insert([
            'nickname' => 'Doe',
            'race' => 'Cat',
            'age' => '15',
            'skill_id' => '2',
        ]);
        
    }
}
