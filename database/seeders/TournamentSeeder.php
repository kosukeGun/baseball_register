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
            'name' => '第95回選抜高校野球大会'
        ]);
        Tournament::create([
            'name' => '第104回全国高校野球選手権大会'
        ]);
    }
}
