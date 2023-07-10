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
        $this->call(UserSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(TournamentSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(ScoreSeeder::class);
    }
}
