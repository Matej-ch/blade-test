<div>
    <form
        class="space-y-8 divide-y divide-gray-200"
        x-data='{
        addressSelected(e) {
            let value = e.target.value
            let id = document.body.querySelector("datalist [value=\""+value+"\"]").dataset.value

            // todo: Do something interesting with this
            console.log(id);
        }
    }'
    >
        <input
            type="text"
            list="bookOptions"
            wire:model="bookQuery"
            class="mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm outline-none border-slate-200"
            x-on:change.debounce="addressSelected($event)"
        >

        <datalist id="bookOptions">
            @foreach($searchResults as $result)
                <option
                    wire:key="{{ $result->uniqueKey }}"
                    data-value="{{ $result->uniqueKey }}"
                    value="{{ $result->fullAddress }}"
                ></option>
            @endforeach
        </datalist>
    </form>

</div>
