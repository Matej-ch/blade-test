@extends('components.layout')

@section('banner')
    <nav class="p-8 flex justify-center font-bold">
        Hello this is banner section
    </nav>
@endsection

<x-layout-new {{-- content="Content for layout "--}}>
    <x-slot name="content">
        
        <div class="pb-8">
            @foreach($books as $book)
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

    </x-slot>
</x-layout-new>
