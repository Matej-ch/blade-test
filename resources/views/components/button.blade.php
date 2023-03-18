@props(['routeName','label'])

<a href="{{ route($routeName) }}"
   class="font-bold mt-2 w-full px-4 py-3 text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80">
    {{$label}}
</a>
