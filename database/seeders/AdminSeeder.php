<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    Admin
};

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Admin::create([
            'surname'=>'test',
            'name'=>'test',
            'middle_name'=>'test',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('password'),
            'gender'=>'test',
            'birth_year'=>'test',
            'birth_month'=>'test',
            'birth_day'=>'test',
            'age'=>'test',
            'bloodtype'=>'test',
            'contact_number'=>'test',
            'address'=>'test'
        ]);
    }
}
