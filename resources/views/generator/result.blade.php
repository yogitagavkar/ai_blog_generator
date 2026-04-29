<div class="bg-white p-6 rounded shadow mt-6">

    <h2 class="text-lg font-bold mb-4">
        Generated Titles
    </h2>

    @foreach($titles as $title)
        <div class="border-b py-2 flex justify-between">
            <span>{{ $title }}</span>

             <button class="bg-blue text-black px-4 py-2 rounded">
                Copy
            </button>
        </div>
    @endforeach

</div>