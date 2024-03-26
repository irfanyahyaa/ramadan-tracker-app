<?php

namespace App\Http\Controllers;

use App\Models\Recite;
use Illuminate\Http\Request;

class ReciteController extends Controller
{
    public function create()
    {
        return view('recite.create');
    }

    public function store(Request $request)
    {
        Recite::create($request->all());
        return redirect()->route('recites')->with('status', 'Recite created successfully.');
    }
}
