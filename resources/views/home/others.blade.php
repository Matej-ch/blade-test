@extends('components.layout')

@section('content')
    {{-- template inheritance, used more before components came along --}}
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

    @include('shared.footer', ['passedVar' => 'this var is passed down'])

    <x-alert type="orange" :message="$message"/> <!-- Class based components -->
@endsection
