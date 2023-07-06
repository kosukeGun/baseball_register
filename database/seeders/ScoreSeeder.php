<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Score::create([
            'name' => 'HR',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '3塁打',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '2塁打',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '左ヒット',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '中ヒット',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '右ヒット',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '内野安打',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => 'バントヒット',
            'status_id' => '1',
        ]);

        Score::create([
            'name' => '左フライ',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '中フライ',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '右フライ',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '左ライナー',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '中ライナー',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '右ライナー',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '外野ゴロ',
            'status_id' => '2',
        ]);

        Score::create([
            'name' => '四球',
            'status_id' => '3',
        ]);

        Score::create([
            'name' => '死球',
            'status_id' => '3',
        ]);

        Score::create([
            'name' => '外野フライエラー',
            'status_id' => '4',
        ]);

        Score::create([
            'name' => '内野フライエラー',
            'status_id' => '4',
        ]);

        Score::create([
            'name' => '内野ゴロエラー',
            'status_id' => '4',
        ]);

        Score::create([
            'name' => '外野フライエラー',
            'status_id' => '4',
        ]);

        Score::create([
            'name' => '送球エラー',
            'status_id' => '4',
        ]);

        Score::create([
            'name' => '見逃し三振',
            'status_id' => '5',
        ]);

        Score::create([
            'name' => '空振り三振',
            'status_id' => '5',
        ]);

        Score::create([
            'name' => '3バント失敗',
            'status_id' => '5',
        ]);
    }
}
