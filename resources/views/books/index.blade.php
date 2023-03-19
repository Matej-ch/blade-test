@extends('layouts.base')

@section('banner')
    <nav class="p-8 flex justify-center font-bold">
        Hello this is banner section
    </nav>
@endsection

@section('content')

    <div class="pb-8">
        @foreach($books as $book)

            @if ($loop->first)
                <div class="bg-orange-500 font-bold text-center">First book</div>
            @endif

            @if ($loop->last)
                <div class="bg-emerald-500 font-bold text-center"> Last book</div>
            @endif

            <div class="{{$loop->first ? 'bg-red-200' : 'bg-green-200' }}">
                {{ $book->name }}
                {{ $book->cover }}
                {!! $book->cover !!}

            </div>   {{-- echo (e) htmlspecialchars --}}
            <div class="pb-8">
                Custom blade echo directive of an object
                <pre class="inline">Book</pre>
                defined in
                <pre class="inline">AppServiceProvider</pre>
                : {{$book}}
            </div>

        @endforeach
    </div>

@endsection
