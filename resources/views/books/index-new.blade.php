<x-banner>
    Hello this is banner section
</x-banner>

<x-layout-new {{-- content="Content for layout "--}}>
    <x-slot name="content">

        <div class="pb-8">
            @foreach($books as $book)
                <x-book-card :book="$book" :loop="$loop"></x-book-card> <!-- Anonymous components -->
            @endforeach
        </div>

    </x-slot>
</x-layout-new>
