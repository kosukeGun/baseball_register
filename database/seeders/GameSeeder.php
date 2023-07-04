<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'user_id' => '1',
            'tournament_id' => '1',
            'name' => '3回戦',
            'date' => "2022/8/21"
        ]);
    }
}
