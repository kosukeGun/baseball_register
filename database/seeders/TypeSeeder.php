<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Type::create([
            'name' => '投手'
        ]);
        Type::create([
            'name' => '捕手'
        ]);
        Type::create([
            'name' => '内野手'
        ]);
        Type::create([
            'name' => '外野手'
        ]);
    }
}
