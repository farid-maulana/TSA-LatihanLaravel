<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return "Selamat Datang";
    // }

    public function index()
    {
        $portfolios = Portfolio::all();
        return view('home.index', compact('portfolios'));
    }
}
