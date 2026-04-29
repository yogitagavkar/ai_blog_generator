<?php

namespace App\Jobs;

use App\Services\OpenAIService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class GenerateBlogTitlesJob implements ShouldQueue
{
    use Queueable;

    protected array $data;

    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(OpenAIService $service): void
    {
        $response = $service->generateTitles($this->data);

        // Optional:
        // Save response into database
        // Dispatch event
        // Send notification
    }
}