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
            'status' => '1',
        ]);

        Score::create([
            'name' => '3塁打',
            'status' => '1',
        ]);

        Score::create([
            'name' => '2塁打',
            'status' => '1',
        ]);

        Score::create([
            'name' => '左ヒット',
            'status' => '1',
        ]);

        Score::create([
            'name' => '中ヒット',
            'status' => '1',
        ]);

        Score::create([
            'name' => '右ヒット',
            'status' => '1',
        ]);

        Score::create([
            'name' => '内野安打',
            'status' => '1',
        ]);

        Score::create([
            'name' => 'バントヒット',
            'status' => '1',
        ]);

        Score::create([
            'name' => '投ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '捕ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '一ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '二ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '三ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '遊ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '左フライ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '中フライ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '右フライ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '左ライナー',
            'status' => '2',
        ]);

        Score::create([
            'name' => '中ライナー',
            'status' => '2',
        ]);

        Score::create([
            'name' => '右ライナー',
            'status' => '2',
        ]);

        Score::create([
            'name' => '外野ゴロ',
            'status' => '2',
        ]);

        Score::create([
            'name' => '四球',
            'status' => '3',
        ]);

        Score::create([
            'name' => '死球',
            'status' => '3',
        ]);

        Score::create([
            'name' => '外野フライエラー',
            'status' => '4',
        ]);

        Score::create([
            'name' => '内野フライエラー',
            'status' => '4',
        ]);

        Score::create([
            'name' => '内野ゴロエラー',
            'status' => '4',
        ]);

        Score::create([
            'name' => '外野フライエラー',
            'status' => '4',
        ]);

        Score::create([
            'name' => '送球エラー',
            'status' => '4',
        ]);

        Score::create([
            'name' => '見逃し三振',
            'status' => '5',
        ]);

        Score::create([
            'name' => '空振り三振',
            'status' => '5',
        ]);

        Score::create([
            'name' => '3バント失敗',
            'status' => '5',
        ]);
    }
}
