<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Single action controller
    public function __invoke()
    {
        return view('home');
    }
}
