<div class="text-center">

    <p class="text-xl">{{ $count }}</p>

    <div class="flex gap-2">
        <x-button wire:click="increment" class="bg-green-300 text-xl">+</x-button>
        <x-button wire:click="decrement" class="bg-red-300 text-xl">-</x-button>
    </div>
</div>
