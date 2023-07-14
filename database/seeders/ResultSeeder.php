<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Result;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Result::create([
            'rbi' => '0',
            'score_id' => '5',
            'member_id' => '1',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '1',
            'score_id' => '7',
            'member_id' => '2',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '1',
            'score_id' => '12',
            'member_id' => '3',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '17',
            'member_id' => '4',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '2',
            'score_id' => '4',
            'member_id' => '5',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '9',
            'member_id' => '6',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '14',
            'member_id' => '7',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '15',
            'member_id' => '1',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '2',
            'score_id' => '3',
            'member_id' => '2',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '3',
            'score_id' => '2',
            'member_id' => '3',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '3',
            'score_id' => '1',
            'member_id' => '4',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '16',
            'member_id' => '5',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '9',
            'member_id' => '6',
            'game_id' => '1',
        ]);
        Result::create([
            'rbi' => '0',
            'score_id' => '8',
            'member_id' => '7',
            'game_id' => '1',
        ]);
        
    }
}
