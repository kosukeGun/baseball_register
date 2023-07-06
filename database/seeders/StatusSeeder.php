<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'ヒット',
            'status' => '1',
        ]);

        Status::create([
            'name' => 'アウト',
            'status' => '2',
        ]);

        Status::create([
            'name' => '四死球',
            'status' => '3',
        ]);

        Status::create([
            'name' => 'エラー',
            'status' => '4',
        ]);

        Status::create([
            'name' => '三振',
            'status' => '5',
        ]);
    }
}
