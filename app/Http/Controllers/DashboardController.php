<?php

namespace App\Http\Controllers;
use App\Models\BlogGeneration;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index()
    {
        $history = BlogGeneration::latest()->get();

        return view('dashboard.index', compact('history'));
    }
}
