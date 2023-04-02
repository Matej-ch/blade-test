<x-layout-new>
    <x-slot name="content">

        <main class="grid grid-cols-3 p-8 gap-4">
            <div class="text-center">
                <h2 class="font-bold">Counter blade component</h2>
                <x-counter :count="5"/>
            </div>

            <div class="text-center">
                <h2 class="font-bold">Counter blade component with js</h2>
            </div>
            <div class="text-center">
                <h2 class="font-bold">Counter livewire component</h2>
                <livewire:counter/>
            </div>
        </main>

    </x-slot>
</x-layout-new>
