<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function livewire(): View
    {
        return view('livewire');
    }

    public function others(): View
    {
        return view('others', [
            'sharedVar' => 'This one is inherited',
            'message' => 'This is an alert message'
        ]);
    }

    public function components(): View
    {
        return view('components');
    }
}
