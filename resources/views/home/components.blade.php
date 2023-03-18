@extends('components.layout')

<x-layout-new {{-- content="Content for layout "--}}>

    <x-slot name="content">
        <x-alert type="orange" :message="$message"/> <!-- Class based components -->
    </x-slot>

</x-layout-new>

