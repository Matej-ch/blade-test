<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class DeleteBook extends Component
{
    public Book $book;

    public function delete()
    {
        $this->book->delete();
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <button wire:click="delete" class="font-bold mt-2 w-full px-4 py-3 text-center capitalize bg-red-400 rounded hover:bg-red-600">Delete</button>
            </div>
        blade;
    }
}
