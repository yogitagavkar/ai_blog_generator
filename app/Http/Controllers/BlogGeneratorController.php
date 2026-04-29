<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\BlogGeneration;
use App\Jobs\GenerateBlogTitlesJob;
use Illuminate\Http\Request;
use App\Services\OpenAIService;

class BlogGeneratorController extends Controller{

    public function generate(Request $request)
    {
        $validated = $request->validate([
            'topic' => 'required',
            'keywords' => 'required',
            'tone' => 'required',
            'audience' => 'required',
        ]);

       //$response = GenerateBlogTitlesJob::dispatch($validated);
       

       $response = app(OpenAIService::class)->generateTitles($validated);

        BlogGeneration::create([
            'user_id' => auth()->id(),
            'topic' => $validated['topic'],
            'keywords' => $validated['keywords'],
            'tone' => $validated['tone'],
            'audience' => $validated['audience'],
            'generated_titles' => json_encode($response),
            'meta_description' => null,
            'status' => 'completed',
            'tokens_used' => null,
        ]);

        return back()->with('success', 'Blog titles generated successfully');
    }
}
