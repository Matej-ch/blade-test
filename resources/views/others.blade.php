@extends('components.layout')

@section('content')
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

    @include('shared.footer', ['passedVar' => 'this var is passed down'])

    <x-alert/>
@endsection
