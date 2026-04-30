<div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 sticky top-6">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-800">
            History
        </h2>

        <span class="text-xs bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
            {{ count($history) }}
        </span>
    </div>

    <div class="space-y-4 max-h-[600px] overflow-y-auto">

        @forelse($history as $item)
            <div class="border border-gray-100 rounded-xl p-4 hover:bg-gray-50 transition">

                <h3 class="font-semibold text-gray-800 text-sm">
                    {{ $item->topic }}
                </h3>

                <p class="text-xs text-gray-500 mt-2">
                    {{ $item->created_at->diffForHumans() }}
                </p>

                <div class="mt-3 flex gap-2 flex-wrap">
                    <span class="text-xs px-2 py-1 bg-gray-100 rounded-full">
                        {{ $item->tone }}
                    </span>

                    <span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 rounded-full">
                        {{ $item->generated_titles }}
                    </span>
                </div>

            </div>
        @empty
            <div class="text-center py-10 text-gray-400">
                No history found
            </div>
        @endforelse

    </div>

</div>