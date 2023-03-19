@extends('layouts.base')

<x-layout-new {{-- content="Content for layout "--}}>
    <x-slot name="content">

        <x-dropdown>
            <x-slot name="trigger">
                <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                    {{ 'Books' }}
                    <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
                </button>
            </x-slot>

            <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

            @foreach ($books as $book)
                <x-dropdown-item
                    href="books/{{ $book->id }}"
                    :active='request()->is("categories/{$book->id}")'
                >
                    {{ $book->name }}
                </x-dropdown-item>
            @endforeach
        </x-dropdown> {{-- anonymous component --}}

        <x-alert type="orange" :message="$message"/> {{-- Class based components --}}

    </x-slot>
</x-layout-new>

