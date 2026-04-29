<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\BlogGeneration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
    'name' => 'Yogita',
    'email' => 'gavkaryogita@gmail.com',
    'password' => Hash::make('password123'),
]);

        BlogGeneration::create([
            'user_id' => $user->id,
            'topic' => 'Laravel OpenAI Integration',
            'keywords' => 'laravel, openai, api, ai',
            'tone' => 'Professional',
            'audience' => 'Developers',
            'generated_titles' => json_encode([
                'Top Laravel OpenAI Integration Ideas',
                'How to Build AI Apps with Laravel',
                'Laravel OpenAI Complete Guide',
                'Best Laravel AI Projects for Developers',
                'OpenAI API Integration in Laravel'
            ]),
            'meta_description' => 'Learn how to integrate OpenAI with Laravel applications.',
            'status' => 'completed',
            'tokens_used' => 250
        ]);
    }
}