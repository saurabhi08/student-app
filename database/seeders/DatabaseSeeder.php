<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Professor;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Student::factory(50)->create();

        $this->call([
            CoursesTableSeeder::class,
            ProfessorsTableSeeder::class,
        ]);
    }
}
