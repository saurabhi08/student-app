<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    public function run(): void
    {
        Professor::query()->delete();

        $names = [
            'Dr. Alice Johnson',
            'Dr. Michael Chen',
            'Prof. Sarah Ahmed',
            'Prof. David Martinez',
            'Dr. Emily Thompson',
            'Dr. Priya Patel',
            'Prof. James O’Connor',
            'Dr. Lina Rodriguez',
            'Prof. Omar Hassan',
            'Dr. Hannah Kim',
        ];

        foreach ($names as $name) {
            Professor::updateOrCreate(
                ['name' => $name],
                []
            );
        }
    }
}


