<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'first_name' => 'Ivan',
            'last_name' => 'Radunovic',
            'index' => '73/07',
            'year' => 3,
            'self_funding' => true
        ]);

        Student::create([
            'first_name' => 'Tijana',
            'last_name' => 'Sokovic',
            'index' => '12/03',
            'year' => 2,
            'self_funding' => false
        ]);

        Student::create([
            'first_name' => 'Srdjan',
            'last_name' => 'Tomovic',
            'index' => '73/12',
            'year' => 4,
            'self_funding' => false
        ]);
    }
}
