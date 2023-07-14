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
            'name_first' => '大谷',
            'name_last' => 'しょうへい',
            'mail' => 's.otani@example.com',
            'grade_id' => '2',
            'type_id' => '3',
            'user_id' => '1'
        ]);
        Member::create([
            'name_first' => '鈴木',
            'name_last' => 'せいや',
            'mail' => 's.suzuki@example.com',
            'grade_id' => '7',
            'type_id' => '1',
            'user_id' => '1'
        ]);
        Member::create([
            'name_first' => '村上',
            'name_last' => 'むねたか',
            'mail' => 'm.murakami@example.com',
            'grade_id' => '5',
            'type_id' => '3',
            'user_id' => '1'
        ]);
        Member::create([
            'name_first' => '吉田',
            'name_last' => 'まさたか',
            'mail' => 'm.yoshida@example.com',
            'grade_id' => '5',
            'type_id' => '2',
            'user_id' => '1'
        ]);
        Member::create([
            'name_first' => '岡本',
            'name_last' => 'かずま',
            'mail' => 'k.okamoto@example.com',
            'grade_id' => '5',
            'type_id' => '4',
            'user_id' => '1'
        ]);
        Member::create([
            'name_first' => '山田',
            'name_last' => 'てつと',
            'mail' => 't.yamada@example.com',
            'grade_id' => '2',
            'type_id' => '3',
            'user_id' => '1'
        ]);
        Member::create([
            'name_first' => '牧',
            'name_last' => 'しゅうご',
            'mail' => 's.maki@example.com',
            'grade_id' => '3',
            'type_id' => '4',
            'user_id' => '1'
        ]);
    }
}
