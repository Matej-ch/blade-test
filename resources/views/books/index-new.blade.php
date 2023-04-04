<x-layout-new {{-- content="Content for layout "--}}>
    <x-slot name="content">

        <x-banner>
            <x-button routeName="books-create" class="bg-green-200 max-w-2xl">Add book</x-button>
        </x-banner>

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
                        <x-button routeName="book" params="{{$book->id}}" class="bg-blue-400 hover:bg-blue-600">Detail</x-button>
                        <x-button class="bg-green-400 hover:bg-green-600">Edit</x-button>
                        <form action="{{route('book-delete',[$book])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="bg-red-400 hover:bg-red-600">Delete</x-button>
                        </form>

                    </div>

                </x-book-card> <!-- Anonymous components -->
            @endforeach
        </div>

    </x-slot>
</x-layout-new>
