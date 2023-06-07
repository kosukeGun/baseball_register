<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Member::create([
            'name_first' => '佐藤',
            'name_last' => 'ゆうき',
            'mail' => 'y.sato@example.com',
            'grade_id' => '2',
            'type_id' => '3',
            'owner_id' => '1'
        ]);
        Member::create([
            'name_first' => '鈴木',
            'name_last' => 'さとし',
            'mail' => 's.suzuki@example.com',
            'grade_id' => '7',
            'type_id' => '1',
            'owner_id' => '1'
        ]);
        Member::create([
            'name_first' => '田中',
            'name_last' => 'まさる',
            'mail' => 'm.tanaka@example.com',
            'grade_id' => '5',
            'type_id' => '3',
            'owner_id' => '1'
        ]);
        Member::create([
            'name_first' => '佐々木',
            'name_last' => 'はると',
            'mail' => 'h.sasaki@example.com',
            'grade_id' => '5',
            'type_id' => '2',
            'owner_id' => '1'
        ]);
        Member::create([
            'name_first' => '井上',
            'name_last' => 'だいち',
            'mail' => 'd.inoue@example.com',
            'grade_id' => '5',
            'type_id' => '4',
            'owner_id' => '1'
        ]);
    }
}
