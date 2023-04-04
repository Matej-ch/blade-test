@props(['routeName' => '','params' => []])

@if($routeName)
    <a href="{{ route($routeName,$params) }}"
        {{ $attributes->merge(['class' => 'font-bold mt-2 w-full px-4 py-3 text-center capitalize bg-[#FFC933] rounded hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80']) }}>
        {{ $slot }}
    </a>
@else
    <button type="submit" {{ $attributes->merge(['class' => 'font-bold mt-2 w-full px-4 py-3 text-center capitalize bg-[#FFC933] rounded hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80']) }}>
        {{ $slot }}
    </button>
@endif

