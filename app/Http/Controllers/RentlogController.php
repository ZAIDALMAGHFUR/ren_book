<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;

class RentlogController extends Controller
{
    public function index()
    {
        $rentlogs = RentLogs::all();
        return view('rentlog', ['rentlogs' => $rentlogs]);
    }
}