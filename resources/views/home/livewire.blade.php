@extends('layouts.base')

<x-layout-new {{-- content="Content for layout "--}}>

    <x-slot name="content">
        <livewire:book-autocomplete></livewire:book-autocomplete>
    </x-slot>

</x-layout-new>
