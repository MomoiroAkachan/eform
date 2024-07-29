<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View{
        return view('landing.index');
    }
    public function comingSon(): View{
        return view('landing.coming');
    }
}
