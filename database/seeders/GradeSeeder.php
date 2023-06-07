<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Grade::create([
            'name' => '小1'
        ]);
        Grade::create([
            'name' => '小2'
        ]);
        Grade::create([
            'name' => '小3'
        ]);
        Grade::create([
            'name' => '小4'
        ]);
        Grade::create([
            'name' => '小5'
        ]);
        Grade::create([
            'name' => '小6'
        ]);
        Grade::create([
            'name' => '中1'
        ]);
        Grade::create([
            'name' => '中2'
        ]);
        Grade::create([
            'name' => '中3'
        ]);
        Grade::create([
            'name' => '高1'
        ]);
        Grade::create([
            'name' => '高2'
        ]);
        Grade::create([
            'name' => '高3'
        ]);
        Grade::create([
            'name' => '大1'
        ]);
        Grade::create([
            'name' => '大2'
        ]);
        Grade::create([
            'name' => '大3'
        ]);
        Grade::create([
            'name' => '大4'
        ]);
        Grade::create([
            'name' => '社会人'
        ]);
    }
}
