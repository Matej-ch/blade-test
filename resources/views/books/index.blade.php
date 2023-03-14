@extends('components.layout')

@section('banner')
    <nav class="p-8 flex justify-center font-bold">
        Hello this is banner section
    </nav>
@endsection

@section('content')

    <div class="pb-8">
        @foreach($books as $book)
            <div class="{{$loop->first ? 'bg-red-200' : 'bg-green-200' }}">
                {{ $book->name }}
                {{ $book->cover }}
                {!! $book->cover !!}
            </div>   {{-- echo (e) htmlspecialchars --}}
        @endforeach
    </div>

@endsection
