<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(MemberSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(GradeSeeder::class);
    }
}
