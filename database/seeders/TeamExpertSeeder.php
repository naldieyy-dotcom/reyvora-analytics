<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamExpert;

class TeamExpertSeeder extends Seeder
{
    public function run(): void
    {
        TeamExpert::insert([
            [
                'name' => 'Rey Data',
                'role' => 'Lead Data Scientist',
                'photo' => null,
                'bio' => 'Expert in machine learning and predictive analytics.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Inall Insight',
                'role' => 'Business Intelligence Analyst',
                'photo' => null,
                'bio' => 'Specialist in dashboard development and reporting.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}