<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournament;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::create([
            'name' => '春季大会'
        ]);
        Tournament::create([
            'name' => '秋季大会'
        ]);
        Tournament::create([
            'name' => '国体'
        ]);
    }
}
