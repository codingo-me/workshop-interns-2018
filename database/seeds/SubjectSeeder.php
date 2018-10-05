<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Subject::create([
                'title' => 'Matematika I',
                'credits' => 5,
                'year' => 1
            ]);
            Subject::create([
                'title' => 'Matematika II',
                'credits' => 6,
                'year' => 1
            ]);
            Subject::create([
                'title' => 'Vjerovatnoca',
                'credits' => 4,
                'year' => 1
            ]);
            Subject::create([
                'title' => 'Statistika',
                'credits' => 5,
                'year' => 2
            ]);
            Subject::create([
                'title' => 'Kriptografija',
                'credits' => 5.5,
                'year' => 2
            ]);
            Subject::create([
                'title' => 'Priroda i drustvo',
                'credits' => 2,
                'year' => 4
            ]);
    }
}
