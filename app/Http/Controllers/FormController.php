<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController extends Controller
{
    public function page($page){
        return $page;
    }

    public function index(){
        return 'Press to start';
    }
}
