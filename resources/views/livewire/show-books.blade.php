<div class="pb-8">
    @foreach($books as $book)

        @if ($loop->first)
            <div class="bg-orange-500 font-bold text-center">First book</div>
        @endif

        @if ($loop->last)
            <div class="bg-emerald-500 font-bold text-center"> Last book</div>
        @endif

        <x-book-card :book="$book" :loop="$loop"></x-book-card> <!-- Anonymous components -->
    @endforeach
</div>
