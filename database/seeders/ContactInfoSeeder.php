<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactInfo;

class ContactInfoSeeder extends Seeder
{
    public function run(): void
    {
        ContactInfo::create([
            'address' => 'Jakarta, Indonesia',
            'phone' => '+62 812-3456-7890',
            'email' => 'info@datanova.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}