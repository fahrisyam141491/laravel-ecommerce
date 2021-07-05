<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Main extends Controller
{
    public function index() {
        return view('main');
    }
}
