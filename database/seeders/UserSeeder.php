<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'surname' => 'Cruz',
            'name' => 'Juan',
            'middle_name' => 'Dela',
            'email' => 'juandelacruz@email.com',
            'password' => bcrypt('password'),
            'age' => '6',
            'gender' => 'Male',
            'birth_year' => '2010',
            'birth_month' => 'November',
            'birth_day' => '30',
            'religion' => 'Catholic',
            'student_bloodtype' => 'A',
            'guardian_surname' => 'Test',
            'guardian' => 'Test',
            'guardian_middle_name' => 'Test',
            'contact_number' => '09478481554',
            'relation' => 'Mother',
            'guardian_bloodtype' => 'A',
            'address' => 'test address',
            'class_id' => '1',
        ]);
    }
}
