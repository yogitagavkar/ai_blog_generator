<div class="bg-white p-6 rounded-lg shadow">

    <h2 class="font-bold mb-4">
        History
    </h2>

    @foreach($history as $item)
        <div class="border-b py-2">
            {{ $item->topic }}
        </div>
    @endforeach

</div>