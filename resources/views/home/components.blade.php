<x-layout-new>
    <x-slot name="content">

        <main class="p-8">
            <x-button routeName="welcome">Default btn component
            </x-button>
            <x-button routeName="welcome" class="bg-emerald-300 hover:bg-emerald-500">Custom color btn component
            </x-button>

            <div class="mt-8">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button
                            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
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
            </div>


            <x-alert type="orange" :message="$message"/> {{-- Class based components --}}

        </main>

    </x-slot>
</x-layout-new>

