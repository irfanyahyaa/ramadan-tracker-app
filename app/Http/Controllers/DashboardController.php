<?php

namespace App\Http\Controllers;

use App\Models\Recite;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $recites = Recite::all()->sortBy('page');
        return view('dashboard', compact('recites'));
    }
}
