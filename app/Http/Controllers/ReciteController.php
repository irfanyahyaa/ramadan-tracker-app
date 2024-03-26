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
        Recite::create([
            'juz' => $request->juz,
            'juz_remaining' => 30 - $request->juz,
            'page' => $request->page,
            'description' => $request->description
        ]);
        return redirect()->route('dashboard')->with('status', 'Recite created successfully.');
    }

    public function destroy($id)
    {
        $recite = Recite::find($id);
        $recite->delete();
        return redirect()->route('dashboard')->with('status', 'Recite deleted successfully.');
    }

    public function edit($id)
    {
        $recite = Recite::find($id);
        return view('recite.edit', compact('recite'));
    }
}
