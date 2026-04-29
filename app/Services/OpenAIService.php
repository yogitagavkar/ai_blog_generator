<?php

namespace App\Services;

use OpenAI;

class OpenAIService
{
    public function generateTitles($data)
    {
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $response = $client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $this->buildPrompt($data)
                ]
            ]
        ]);

        return $response['choices'][0]['message']['content'];
    }

    private function buildPrompt($data)
    {
        return "
        Generate 10 blog titles.
        Topic: {$data['topic']}
        Keywords: {$data['keywords']}
        Tone: {$data['tone']}
        Audience: {$data['audience']}
        Also generate meta descriptions.
        ";
    }
}