<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AnalyticsService;

class AnalyticsServiceSeeder extends Seeder
{
    public function run(): void
    {
        AnalyticsService::insert([
            [
                'title' => 'Data Visualization',
                'description' => 'Transforming raw data into meaningful visual dashboards.',
                'detail' => 'We create interactive and visually engaging dashboards that help businesses understand complex data easily. Our solutions ensure clarity, usability, and impactful storytelling through data visualization.',
                'icon' => 'chart-bar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Predictive Analytics',
                'description' => 'Forecasting business outcomes using advanced analytics models.',
                'detail' => 'Our predictive analytics services leverage machine learning and statistical models to forecast future trends, enabling businesses to make proactive and informed decisions.',
                'icon' => 'graph-up',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Business Intelligence',
                'description' => 'Smart reporting solutions for better strategic decisions.',
                'detail' => 'We provide comprehensive BI solutions that transform raw data into meaningful insights through reports and dashboards, helping organizations improve performance and strategy.',
                'icon' => 'briefcase',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}