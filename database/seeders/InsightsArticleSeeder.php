<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InsightsArticle;

class InsightsArticleSeeder extends Seeder
{
    public function run(): void
    {
        InsightsArticle::insert([
    [
        'title' => 'The Future of Data Science',
        'slug' => 'future-of-data-science',
        'content' => 'Data science continues to revolutionize industries worldwide.',
        'image' => 'article1.jpg',
        'author' => 'Admin',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'title' => 'Why Businesses Need Analytics',
        'slug' => 'business-need-analytics',
        'content' => 'Analytics empowers organizations to make informed decisions.',
        'image' => 'article2.jpg',
        'author' => 'Admin',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}