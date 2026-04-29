<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogGeneration;

class BlogGenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogGeneration::create([
            'user_id' => 1,
            'topic' => 'Laravel AI Integration',
            'keywords' => 'laravel, openai, api',
            'tone' => 'professional',
            'audience' => 'developers',
            'generated_titles' => json_encode([
                'Best Laravel AI Integrations',
                'OpenAI in Laravel Guide',
                'Laravel Meets AI'
            ]),
            'meta_description' => 'Learn Laravel AI integration'
        ]);
    }
}
