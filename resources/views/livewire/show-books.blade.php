<div class="pb-8">
    @foreach($books as $book)

        @if ($loop->first)
            <div class="bg-orange-500 font-bold text-center">First book</div>
        @endif

        @if ($loop->last)
            <div class="bg-emerald-500 font-bold text-center"> Last book</div>
        @endif

        <x-book-card :book="$book" :loop="$loop">
            <div class="flex gap-1 mb-4">
                <a class="font-bold mt-2 w-full px-4 py-3 text-center capitalize bg-green-400 rounded hover:bg-green-600" href="{{route('book-lw',['book' => $book])}}">Detail</a>
                <livewire:delete-book :book="$book"></livewire:delete-book>
            </div>
        </x-book-card> <!-- Anonymous components -->
    @endforeach
</div>
