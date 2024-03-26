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
//        Recite::create($request->all());
        Recite::create([
            'juz' => $request->juz,
            'juz_remaining' => 30 - $request->juz,
            'page' => $request->page,
            'description' => $request->description
        ]);
        return redirect()->route('dashboard')->with('status', 'Recite created successfully.');
    }
}
