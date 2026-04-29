<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

        <!-- Header -->
        <div class="px-8 py-6 border-b bg-gradient-to-r from-blue-600 to-indigo-600">
            <h2 class="text-2xl font-bold text-white">
                AI Blog Title Generator
            </h2>
            <p class="text-blue-100 mt-2 text-sm">
                Generate SEO-friendly blog titles, meta descriptions and content angles
            </p>
        </div>

        <!-- Form -->
        <form method="POST" action="/generate" class="p-8 space-y-6">
            @csrf

            <!-- Topic -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Blog Topic
                </label>

                <input
                    type="text"
                    name="topic"
                    placeholder="Example: Laravel OpenAI Integration"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 
                    focus:outline-none focus:ring-2 focus:ring-blue-500 
                    focus:border-blue-500 transition duration-200">

                <p class="text-xs text-gray-500 mt-2">
                    Enter your main blog topic
                </p>
            </div>

            <!-- Keywords -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    SEO Keywords
                </label>

                <textarea
                    name="keywords"
                    rows="4"
                    placeholder="Example: laravel, openai, api integration"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 
                    focus:outline-none focus:ring-2 focus:ring-blue-500 
                    focus:border-blue-500 transition duration-200 resize-none"></textarea>

                <p class="text-xs text-gray-500 mt-2">
                    Add comma-separated keywords for better SEO
                </p>
            </div>

            <!-- Tone + Audience -->
            <div class="grid md:grid-cols-2 gap-6">

                <!-- Tone -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Writing Tone
                    </label>

                    <select
                        name="tone"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3
                        focus:outline-none focus:ring-2 focus:ring-blue-500">

                        <option>Professional</option>
                        <option>Friendly</option>
                        <option>Technical</option>
                        <option>Casual</option>
                        <option>Persuasive</option>
                    </select>
                </div>

                <!-- Audience -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Target Audience
                    </label>

                    <select
                        name="audience"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3
                        focus:outline-none focus:ring-2 focus:ring-blue-500">

                        <option>Developers</option>
                        <option>Marketers</option>
                        <option>Business Owners</option>
                        <option>Startup Founders</option>
                        <option>Students</option>
                    </select>
                </div>

            </div>

            <!-- Button -->
            <div class="pt-4">
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white 
                    font-semibold py-4 rounded-xl transition duration-300 
                    shadow-md hover:shadow-lg">

                    Generate Blog Titles
                </button>
            </div>

        </form>

    </div>
</div>