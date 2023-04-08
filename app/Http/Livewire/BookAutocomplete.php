<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookAutocomplete extends Component
{
    public string $bookQuery = '';
    public string $name = '';
    public string $isbn = '';
    public array $searchResults = [];

    public function updatedStreetAddress()
    {
        if ($this->bookQuery !== '') {
            // An array of SearchResults
            $this->searchResults = Book::where('name', $this->bookQuery)
                ->orderBy('name')
                ->take(15)
                ->get();
        } else {
            $this->searchResults = [];
        }
    }

    public function render()
    {
        return view('livewire.book-autocomplete');
    }
}
