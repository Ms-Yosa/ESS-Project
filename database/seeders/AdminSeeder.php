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
            'surname'=>'Doe',
            'name'=>'Jane',
            'middle_name'=>'Smith',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('password'),
            'gender'=>'Female',
            'birth_year'=>'1995',
            'birth_month'=>'October',
            'birth_day'=>'4',
            'age'=>'26',
            'bloodtype'=>'AB',
            'contact_number'=>'09225443321',
            'address'=>'Manila, Philippines'
        ]);
    }
}
