<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeamerica extends Controller
{
    public function index () {
        return view('welcome');
    }
}
