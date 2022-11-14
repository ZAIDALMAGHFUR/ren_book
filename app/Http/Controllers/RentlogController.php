<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentlogController extends Controller
{
    public function index()
    {
        return view('rentlog');
    }
}