<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    public function show($id): View
    {
        return view('books.view', [
            'book' => Book::findOrFail($id)
        ]);
    }

    public function indexNew(): View
    {
        return view('books.index-new', [
            'books' => Book::all()
        ]);
    }
}
