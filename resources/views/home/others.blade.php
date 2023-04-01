@extends('layouts.base')

@section('content')
    <main class="p-4">
        {{-- template inheritance, used more before components came along --}}
        <div class="pb-2">
            The current date is {{ date('d.m.Y') }}.
        </div>

        <div class="pb-2">
            First key of array with
            <b>array_key_first</b> is: {{ array_key_first(['Second' => 'element','Third' => 'element']) }}
        </div>

        @verbatim
            <div class="pb-2">
                Hello, {{ $books[0]->name }}.
            </div>
        @endverbatim
    </main>

    @include('shared.footer', ['passedVar' => 'this var is passed down'])

@endsection
