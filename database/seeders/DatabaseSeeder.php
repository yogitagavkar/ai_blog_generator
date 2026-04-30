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
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        BlogGeneration::create([
            'user_id' => $user->id,
            'topic' => 'Laravel OpenAI Integration',
            'keywords' => 'laravel,openai,api',
            'tone' => 'Professional',
            'audience' => 'Developers',
            'generated_titles' => json_encode([
                'Top Laravel AI Integration Ideas',
                'Laravel OpenAI Complete Guide'
            ]),
            'meta_description' => 'Learn Laravel AI integration'
        ]);
    }
}