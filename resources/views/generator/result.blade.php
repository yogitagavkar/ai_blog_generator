@if(!empty($titles))

<div class="bg-white rounded-2xl shadow-xl border border-gray-100 mt-8 p-8">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">
            Generated Titles
        </h2>
    </div>

    <div class="space-y-4">

        @foreach($titles as $title)
            <div class="flex items-center justify-between p-4 rounded-xl border border-gray-100 hover:bg-gray-50">

                <span class="text-gray-700 font-medium">
                    {{ $title }}
                </span>

                <button
                    onclick="navigator.clipboard.writeText('{{ $title }}')"
                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm">

                    Copy
                </button>

            </div>
        @endforeach

    </div>

</div>

@endif