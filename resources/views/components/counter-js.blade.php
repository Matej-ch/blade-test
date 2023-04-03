<div x-data="{ count: {{$count}} }">
    <p class="text-xl" x-text="count"></p>
    <div class="flex gap-2">
        <x-button class="bg-green-300 text-xl" x-on:click="count++">+</x-button>
        <x-button class="bg-red-300 text-xl" x-on:click="count--">-</x-button>
    </div>
</div>
