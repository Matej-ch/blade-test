@extends('components.layout')

@section('banner')
    <nav class="p-8 flex justify-center font-bold">
        Hello this is banner section
    </nav>
@endsection

@section('content')

    <div class="pb-8">
        @foreach($books as $book)
            <div class="{{$loop->even ? 'bg-red-200' : 'bg-green-200' }}">
                {{ $book->name }}
                {{ $book->cover }}
                {!! $book->cover !!}
            </div>   {{-- echo htmlspecialchars --}}
        @endforeach
    </div>


    <div class="pb-2">
        The current date is {{ date('d.m.Y') }}.
    </div>

    <div class="pb-2">
        First key of array is {{ array_key_first(['Second' => 'element','Third' => 'element']) }}
    </div>

    {{-- Few examples --}}
    @verbatim
        <div class="pb-2">
            Hello, {{ $books[0]->name }}.
        </div>
    @endverbatim


    @unless (Auth::check())
        You are not signed in.
    @endunless

    {{-- Blade Directives @ --}}

@endsection
