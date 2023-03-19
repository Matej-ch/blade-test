<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function livewire(): View
    {
        return view('home.livewire');
    }

    public function others(): View
    {
        return view('home.others', [
            'sharedVar' => 'This one is inherited',
        ]);
    }

    public function components(): View
    {
        return view('home.components', [
            'message' => 'This is an alert message',
            'books' => DB::table('books')->limit(5)->get(),
        ]);
    }
}
