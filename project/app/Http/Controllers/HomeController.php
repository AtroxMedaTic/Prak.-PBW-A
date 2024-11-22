<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __invoke()
    {
        // dd(\Illuminate\Support\Facades\Auth::check());
        return view('home');
    }
}
