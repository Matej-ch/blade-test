<x-layout-new>
    <x-slot name="content">
        <form action="/books" method="POST" class="m-8">
            @csrf

            <label for="">NAME
                <input type="text" name="name" class="border rounded p-2" required>
            </label>

            <label for="">ISBN
                <input type="text" name="isbn" class="border rounded p-2" required>
            </label>

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror

            @error('isbn')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror

            <x-button type="submit">Submit</x-button>
        </form>
    </x-slot>
</x-layout-new>
