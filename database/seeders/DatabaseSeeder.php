<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        \App\Models\Faculty::factory(10)->create();
        \App\Models\Classes::factory(10)->create();
        $this->call(UserSeeder::class);
        \App\Models\User::factory(100)->create();
        \App\Models\SubArea::factory(10)->create();
        \App\Models\Subject::factory(10)->create();

    }
}
