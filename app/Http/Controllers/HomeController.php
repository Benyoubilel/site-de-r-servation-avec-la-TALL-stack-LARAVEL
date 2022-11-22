<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function __invoke()
    {
        $homes = Home::all();

        return view('home', compact('homes'));
    }
}